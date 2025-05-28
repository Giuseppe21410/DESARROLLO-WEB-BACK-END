<?php
// Importamos la librería PHPMailer:
require 'ASSETS/LIBS/PHPMAILER/src/Exception.php';
require 'ASSETS/LIBS/PHPMAILER/src/PHPMailer.php';
require 'ASSETS/LIBS/PHPMAILER/src/SMTP.php';

// Importamos las clases necesarias de PHPMailer.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


session_start(); // Inicia sesión.

if (!isset($_SESSION['productos'])) {
  $_SESSION['productos'] = 1; // Si no esta iniciado, inicializa el contador de productos.
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['añadir'])) {
    $_SESSION['productos']++; // Añade 1 bloque más a la sesión, cuando se pulsa el botón "Añadir producto".
  }
  // Opción para borrar
  if (isset($_POST['borrar'])) {
        session_destroy(); // Destruye la sesión para reiniciar el formulario.
        header("Location: " . $_SERVER['PHP_SELF']); // Redirige a la misma página para reiniciar el formulario.
        exit;
    }
    // Opción para descargar PDF:
    if (isset($_POST['pdf']) || isset($_POST['enviar'])) {
         require './ASSETS/LIBS/TCPDF/tcpdf.php'; // Importar la librería TCPDF para generar PDFs.
         // Variables de datos de la empresa:
         $nombre_Empresa = trim($_POST['empresa_nombre'] ?? 'Empresa desconocida');
         $nif_Empresa = trim($_POST['empresa_nif'] ?? 'Nif desconocido');
         $direccion_Empresa = trim($_POST['empresa_direccion'] ?? 'Dirección desconocida');
         // Variables de datos del cliente:
        $nombre_Cliente = trim($_POST['cliente_nombre'] ?? 'Cliente Desconocido');
        $nif_Cliente = trim($_POST['cliente_dni'] ?? 'NIF Desconocido');
        $direccion_Cliente = trim($_POST['cliente_direccion'] ?? 'Dirección Desconocida');
        $correo= trim($_POST['correo'] ?? ''); // Correo del cliente, si se ha proporcionado.
        // Variables de detalle de la factura:
        $numero_Factura = trim($_POST['numero_factura'] ?? '0000');
        $fecha_Factura = $_POST['fecha_factura'] ?? 'dd/mm/yyyy';
        $iva_Factura = $_POST['iva_factura'] ?? null;
        $igic_Factura = $_POST['igic_factura'] ?? null;
        // Variable de los productos:
        for ($i = 0; $i < $_SESSION['productos']; $i++){ // Declaración de variables de productos en función del número de productos.
            $descripcion_Producto[] = trim($_POST['descripcion'][$i] ?? 'Descripción no disponible');
            $cantidad_Producto[] = trim($_POST['cantidad'][$i] ?? 0);
            $precio_Producto[] = trim($_POST['precio'][$i] ?? 0.00);
            $notas_Producto[] = trim($_POST['notas'][$i] ?? 'Sin notas');
        }
        

        // Realizar el cálculo del total de la factura:
        $total_Factura = 0;
        for ($i = 0; $i < $_SESSION['productos']; $i++) {
            $total_Factura += $cantidad_Producto[$i] * $precio_Producto[$i];
        }
        if ($iva_Factura) {
            $total_Factura += $total_Factura * ($iva_Factura / 100);
        } else if ($igic_Factura) {
            $total_Factura += $total_Factura * ($igic_Factura / 100);
        }
        // Crear el PDF: 
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); //Creamos una instancia en pdf.

        // Configuración del documento:

        // Configuración del documento
         $pdf->SetCreator($nombre_Empresa); // Establece el creador del documento PDF.
         $pdf->SetAuthor('Sistema de Facturación');
         $pdf->SetTitle('Factura Generada de ' . $nombre_Cliente); // Establece el título del documento PDF.
         $pdf->SetKeywords('Factura, PDF, Empresa'); // Sirve para establecer las palabras clave del documento PDF que se está generando. Mejora la búsqueda de documentos por contenido o tema.

         // Quitar cabecera y pie por defecto
         $pdf->setPrintHeader(false);
         $pdf->setPrintFooter(false);

         // Añadir una página
         $pdf->AddPage();

         // Contenido HTML de la factura: 
         $contenidoHTML = '
            <h1 style="text-align:center;">Factura Nº ' . htmlspecialchars($numero_Factura) . '</h1>
            <p><strong>Fecha:</strong> ' . htmlspecialchars($fecha_Factura) . '</p>

            <h3>Datos de la Empresa</h3>
            <p><strong>Nombre:</strong> ' . htmlspecialchars($nombre_Empresa) . '<br>
            <strong>NIF:</strong> ' . htmlspecialchars($nif_Empresa) . '<br>
            <strong>Dirección:</strong> ' . htmlspecialchars($direccion_Empresa) . '</p>

            <h3>Datos del Cliente</h3>
            <p><strong>Nombre:</strong> ' . htmlspecialchars($nombre_Cliente) . '<br>
            <strong>NIF:</strong> ' . htmlspecialchars($nif_Cliente) . '<br>
            <strong>Dirección:</strong> ' . htmlspecialchars($direccion_Cliente) . '</p>

            <h3>Detalle de Productos</h3>
            <table border="1" cellpadding="5">
              <thead>
                <tr style="background-color:#f0f0f0;">
                  <th><strong>Descripción</strong></th>
                  <th><strong>Cantidad</strong></th>
                  <th><strong>Precio</strong></th>
                  <th><strong>Total</strong></th>
                </tr>
              </thead>
             <tbody>';

             for ($i = 0; $i < $_SESSION['productos']; $i++) {
                $subtotal = $cantidad_Producto[$i] * $precio_Producto[$i]; // Cálculo del subtotal.
                $contenidoHTML .= '
                  <tr>
                    <td>' . htmlspecialchars($descripcion_Producto[$i]) . '</td>
                    <td>' . htmlspecialchars($cantidad_Producto[$i]) . '</td>
                    <td>' . number_format($precio_Producto[$i], 2, ',', '.') . ' €</td>
                    <td>' . number_format($subtotal, 2, ',', '.') . ' €</td>
                  </tr>';

                // Notas si están presentes
                if (!empty($notas_Producto[$i])) {
                    $contenidoHTML .= '
                    <tr>
                      <td colspan="4"><em>Notas:</em> ' . htmlspecialchars($notas_Producto[$i]) . '</td>
                    </tr>';
                }

              }    
            
            $contenidoHTML .= '
               <tr>
                 <td colspan="3" align="right"><strong>Total Neto:</strong></td>
                 <td><strong>' . number_format($total_Factura, 2, ',', '.') . ' €</strong></td>
               </tr>';

           if ($iva_Factura) {
               $contenidoHTML .= '
               <tr>
                 <td colspan="3" align="right"><strong>IVA (' . $iva_Factura . '%):</strong></td>
                 <td>' . number_format($total_Factura * ($iva_Factura / (100 + $iva_Factura)), 2, ',', '.') . ' €</td>
               </tr>';
           } elseif ($igic_Factura) {
               $contenidoHTML .= '
               <tr>
                 <td colspan="3" align="right"><strong>IGIC (' . $igic_Factura . '%):</strong></td>
                 <td>' . number_format($total_Factura * ($igic_Factura / (100 + $igic_Factura)), 2, ',', '.') . ' €</td>
               </tr>';
           }

           $contenidoHTML .= '
               <tr>
                 <td colspan="3" align="right"><strong>Total Final:</strong></td>
                 <td><strong>' . number_format($total_Factura, 2, ',', '.') . ' €</strong></td>
                </tr>
            </tbody>
            </table>

            <p style="margin-top:30px;">Gracias por su compra.</p>';     
            
            $pdf->writeHTML($contenidoHTML, true, false, true, false, '');
            if (isset($_POST['pdf'])) {
                $pdf->Output('factura.pdf', 'D'); // Descarga el PDF en el navegador.
            } 
            if (isset($_POST['enviar'])) { // Envia el PDF por email.
                
                // Guardar el PDF en un archivo temporal.
                $ruta_pdf = __DIR__ . '/factura_temp.pdf';
                $pdf->Output($ruta_pdf, 'F');

                // Inicializamos PHPMailer para enviar el correo electrónico:
                $mail = new PHPMailer(true);
                $mail->SMTPDebug = 3; // Puedes usar 2 o 3 para más detalle
                $mail->Debugoutput = 'html'; // Para que muestre el debug en formato HTML legible

                // Configuración del servidor SMTP:
                $mail->isSMTP();
                 $mail->Host       = 'smtp.office365.com'; // Cambia esto por el servidor SMTP de tu proveedor de correo.
                 $mail->SMTPAuth   = true;
                 $mail->Username   = 'vava23@outlook.com';
                 $mail->Password   = 'kuzbanzchyjlmypw';
                 $mail->SMTPSecure = 'tls';
                 $mail->Port       = 587;   

                 $mail->SMTPOptions = [ // Mejoras de seguridad para el envío de correos.
                  'ssl' => [
                      'verify_peer' => false,
                      'verify_peer_name' => false,
                      'allow_self_signed' => true
                  ]
              ];

                 
                 // Destinatario y remitente::
                 $mail->setFrom('vava23@outlook.com', $nombre_Empresa);
                 $mail->addAddress($correo, $nombre_Cliente);

                 $mail->Subject = 'Se ha generado una nueva factura';
                 $mail->Body    = 'La factura de' . $nombre_Cliente . 'ha sido generada correctamente. Adjunto el PDF de la factura.';

                 // Si quieres adjuntar un PDF
                 $mail->addAttachment($ruta_pdf, 'factura.pdf'); // Adjunta el PDF generado.

                 


                 try {
                   $mail->send();
                   echo 'Correo enviado correctamente.';
                   } catch (Exception $e) {
                       echo 'Error al enviar el correo: ', $mail->ErrorInfo;
                   }            
            }
          
              }
   
}
?>


<!DOCTYPE html>
<html lang="es">
<head> 
  <meta charset="UTF-8">
  <title>Generador de Facturas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./ASSETS/CSS/styles.css">
</head>
<body>

<div class="container">
  <div class="card shadow-sm p-4">
    <h3 class="text-center mb-4">Generador de Facturas</h3>
    <form method="post">
      <!-- Datos de la empresa -->
      <div class="section-title">Datos de la Empresa</div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label">Nombre o Razón Social</label>
          <input required type="text" class="form-control" name="empresa_nombre">
        </div>
        <div class="col-md-6">
          <label class="form-label">NIF / CIF</label>
          <input required type="text" class="form-control" name="empresa_nif">
        </div>
        <div class="col-md-12">
          <label class="form-label">Dirección</label>
          <input required type="text" class="form-control" name="empresa_direccion">
        </div>
      </div>

      <!-- Datos del cliente -->
      <div class="section-title">Datos del Cliente</div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label">Nombre del Cliente</label>
          <input  required type="text" class="form-control" name="cliente_nombre">
        </div>
        <div class="col-md-6">
          <label class="form-label">NIF / DNI</label>
          <input required type="text" class="form-control" name="cliente_dni">
        </div>
        <div class="col-md-6">
          <label class="form-label">Dirección</label>
          <input required type="text" class="form-control" name="cliente_direccion">
        </div>
        <div class="col-md-6">
          <label class="form-label">Correo Electrónico</label>
          <input required type="text" class="form-control" name="correo">
        </div>

      </div>

      <!-- Detalles de factura -->
      <div class="section-title">Detalles de la Factura</div>
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label">Número de Factura</label>
          <input required type="text" class="form-control" name="numero_factura">
        </div>
        <div class="col-md-6">
          <label class="form-label">Fecha</label>
          <input required type="date" class="form-control" name="fecha_factura">
        </div>
        <div class="row g-3 mb-3">
        <div class="col-md-6">
          <label class="form-label">IVA%</label>
          <input  type="number" class="form-control" name="iva_factura">
        </div>
        <div class="col-md-6">
          <label class="form-label">IGIC% (Canarias)</label>
          <input  type="number" class="form-control" name="igic_factura">
        </div>
      </div>

      <!-- Productos -->
      <div class="section-title">Productos o Servicios</div>
      <?php for ($i = 0; $i < $_SESSION['productos']; $i++): ?>
  <div class="product-row mb-3">
    <div>
      <label class="form-label">Descripción</label>
      <input required type="text" class="form-control" name="descripcion[<?= $i ?>]">
    </div>
    <div>
      <label class="form-label">Cantidad</label>
      <input  required type="number" class="form-control" name="cantidad[<?= $i ?>]" min="1">
    </div>
    <div>
      <label class="form-label">Precio Unitario (€)</label>
      <input required type="number" class="form-control" name="precio[<?= $i ?>]" min="0" step="0.01">
    </div>
  </div>

  <div class="mb-3">
    <label class="form-label">Notas Adicionales</label>
    <textarea class="form-control" rows="3" name="notas[<?= $i ?>]"></textarea>
  </div>
<?php endfor; ?>

      <button name="añadir"  type="submit" class="btn mt-2 btn-light">Añadir producto</button>


      <!-- Botones -->
      <div class="d-flex justify-content-between mt-4">
        <button name="pdf" type="submit" class="btn btn-secondary">Descargar PDF</button>
        <button type="submit" name="enviar" class="btn btn-success">Enviar por Email</button>
        <button name="borrar" type="submit" class="btn bg-danger text-white">Borrar</button>
      </div>

      <?php if (isset($enviado)): ?>
        <div class="alert alert-info mt-3" role="alert">
          <?= htmlspecialchars($enviado) ?>
        </div>
        <?php endif; ?>
    </form>
  </div>
</div>

</body>
</html>
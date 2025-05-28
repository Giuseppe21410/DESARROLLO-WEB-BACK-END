<?php
require_once('./tcpdf/tcpdf.php'); // Ajusta la ruta según tu proyecto

// Crear nueva instancia del PDF
// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Configuración del documento
$pdf->SetCreator('Tu Empresa');
$pdf->SetAuthor('Sistema de Facturación');
$pdf->SetTitle('Factura Generada');
$pdf->SetSubject('Factura PDF');
$pdf->SetKeywords('Factura, PDF, PHP, TCPDF'); // Sirve para establecer las palabras clave del documento PDF que se está generando. Mejora la búsqueda de documentos por contenido o tema.

// Quitar cabecera y pie por defecto
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// Añadir una página
$pdf->AddPage();

// Puedes personalizar aquí con datos reales
$contenidoHTML = '
  <h1 style="text-align:center;">Factura</h1>
  <p><strong>Empresa:</strong> Mi Empresa S.L.</p>
  <p><strong>Cliente:</strong> Juan Pérez</p>
  <p><strong>Fecha:</strong> ' . date("d/m/Y") . '</p>
  <br>
  <table border="1" cellpadding="5">
    <thead>
      <tr style="background-color:#f0f0f0;">
        <th><strong>Descripción</strong></th>
        <th><strong>Cantidad</strong></th>
        <th><strong>Precio</strong></th>
        <th><strong>Total</strong></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Producto 1</td>
        <td>2</td>
        <td>25€</td>
        <td>50€</td>
      </tr>
      <tr>
        <td>Producto 2</td>
        <td>1</td>
        <td>40€</td>
        <td>40€</td>
      </tr>
      <tr>
        <td colspan="3" style="text-align:right;"><strong>Total</strong></td>
        <td><strong>90€</strong></td>
      </tr>
    </tbody>
  </table>
  <p style="margin-top:30px;">Gracias por su compra.</p>
';


$pdf->writeHTML($contenidoHTML, true, false, true, false, ''); // Escribe el contenido HTML en el PDF, haciendo un salto de línea después, sin rellenar el fondo, restableciendo la altura de línea para evitar solapamientos, sin usar una celda y sin alineación específica.

// Salida del PDF (en navegador)
$pdf->Output('factura.pdf', 'I'); // 'I' = Inline, 'D' = Descargar, 'F' = guardar en servidor

$content = $pdf->Output('factura.pdf', 'S'); // Obtener contenido como string
?>


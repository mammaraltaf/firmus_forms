<?php
error_reporting(0);
$id=$_GET['id'];
require('fpdf/fpdf.php');
include "../../functions.php";
class PDF extends FPDF
{


// Tableau simple
		function BasicTable($header, $data)
		{
			global $transl;
			
		
			// Données
               $j=0;			
			foreach($data as $row)
			{
			$taille=strlen($row[1])+20;
			  if ($row[1]==1)	$row[1]='[X]'; else if ($row[1]==0) $row[1]='[  ]';
			  if ($transl[$j]=='Fecha') $row[1]=datetofrench($row[1]);
			  if ($transl[$j]=='Fecha de Vencimiento (ID):') $row[1]=datetofrench($row[1]);
			  if ($transl[$j]=='Fecha de Nacimiento:') $row[1]=datetofrench($row[1]);
			  
$this->SetFont('Arial','i',8); $this->Cell(130,6,$transl[$j],0); $this->SetFont('Arial','',8); $this->Cell($taille,6,$row[1],0);
		 
	            $j++; 
				
				
				$this->Ln();
			}
			
		}

// En-tête
		function Header()
		{
			
			// Logo
			$this->Image('images/header.PNG',10,6,180);
		$this->Ln(20);
		}

// Pied de page
		function Footer()
		{
			global $nombre_pages;
			
			
			// Positionnement à 1,5 cm du bas
			$this->SetY(-15);
			// Numéro de page
			$this->Cell(380,10,$this->PageNo().'/'.$nombre_pages,0,0,'C');
			// footer
			$this->Image('images/footer.PNG',10,280,180);
		}
}

//----------------------------debut du pgm

$pdf = new PDF();
include "../../dbclass.php";

//------------------------------------------------
$db = new database('');
$db->connect();
$db->query("select 
Contract_Type,
Part_Rel,
Part_Rel_Raison,
E_Name,
E_surname,
E_Country,
E_C_Status,
E_ID_type,
E_ID_No,
E_ID_Expire_Date,
E_Birth_Date,
E_Birth_Place,
E_Email,
E_Profession,
E_Profession_Current,
E_Home_Adress,
E_Home_Adress_Number,
E_Home_Postal_Adress,
E_Home_Fax,
E_Office_Adress,
E_Office_Number,
E_Office_Postal_Adress,
E_Office_Fax,
E_Salary_Independ,
E_Salary_NotRetired,
E_Salary_NotPensioned,
E_Salary_Fixed,
E_Salary_Variable,
E_Salary_Other,
Funds_Source1,
Funds_Source1_Type_Receive_Cash,
Funds_Source1_Type_Send_Cash,
Funds_Source1_Type_Receive_Titles,
Funds_Source1_Type_Submit_Titles,
Funds_Source2,
Funds_Source2_Type_Receive_Cash,
Funds_Source2_Type_Send_Cash,
Funds_Source2_Type_Receive_Titles,
Funds_Source2_Type_Submit_Titles,
RS_Employer_name,
RS_Annual_Income_USD,
RS_Annual_Salary_USD,
RS_Years_in_Company,
RS_Activity_Professional_fees,
RS_Activity_Own_business,
RS_Activity_Saving,
RS_Activity_Pension,
RS_Activity_Pension1,
RS_Investment_Dividends,
RS_Others,
Bank1_Ref_Name,
Bank1_Ref_Country,
Bank1_Ref_Contact,
Bank1_Ref_Phone,
Bank2_Ref_Name,
Bank2_Ref_Country,
Bank2_Ref_Contact,
Bank2_Ref_Phone,
Bank3_Ref_Name,
Bank3_Ref_Country,
Bank3_Ref_Contact,
Bank3_Ref_Phone,
Initial_Deposit_Cash,
Initial_Deposit_Non_Securities,
Initial_Deposit_From1,
Initial_Deposit_From1_Cash,
Initial_Deposit_From1_Securities,
Initial_Deposit_USD_Amount,
Initial_Deposit_Securities_Amount,
Initial_Deposit_From2,
Initial_Deposit_From2_Cash,
Initial_Deposit_From2_Securities,
Initial_Deposit_From1_Rel,
Initial_Deposit_From2_Rel,
PEP,
PEP_Close,
PEP_Five,
Orders_Autorise_Owner,
Orders_Autorise_Co_Owner,
Orders_Autorise_Signatory,
Orders_Autorise_Attorney,
Orders_Autorise_Beneficiary_Shareholder,
Send_receive_cash_Autorise_Owner,
Send_receive_cash_Autorise_Co_Owner,
Send_receive_cash__Autorise_Signatory,
Send_receive_cash_Autorise_Attorney,
Send_receive_cash__Beneficiary_Shareholder,
Orders_Mail,
Orders_Documents,
Orders_Telephone,
Orders_text,
Orders_Directly,
Autorise_Give_instuctions,
Complete1,
Complete2,
Complete3,
Complete4,
Autorise_Firmus,
Receive_AS_Mail,
Receive_AS_Postal,
Receive_Mensual,
Receive_Trimestral,
Receive_Semestral,
Receive_Anual,
General_Data,
Signature1_Permanent,
Signature1_Not_variable,
Full_name1,
Full_name2,
Document1_ID,
Document2_ID,
Signature1_Date,
Signature2_Date,
Runners_Name,
Runners_Date,
Compliance_Officer_Name,
Compliance__Officer_Date,
Chief_Executive_Name,
Chief_Executive_Date

 from FOR_FF_APN_ES where id=$id");


//-----------------

$data = array();
while( $data5 = $db->fetch_array() )
{
$i=$i+1;
$rr=$data5;
};

$ir=0;
$transl= array(
'Tipo de Cuenta o Contrato No Discrecional ',
'Parte Relacionada: Si ',
'Explique por qué se considera parte relacionada',
'Nombre(s):',
'Apellido(s):',
'Nacionalidad:',
'Estado Civil:',
'Tipo de Documento (ID):',
'No. de Documento (ID):',
'Fecha de Vencimiento (ID):',
'Fecha de Nacimiento:',
'Lugar de Nacimiento:',
'Correo Electrónico:',
'Profesión u Oficio:',
'Ocupación Actual:',
'Domicilio Personal: ',
'Nº de Domicilio / Casa: ',
'Dirección Postal:',
'Fax:',
'Domicilio Laboral:',
'Nº de Oficina: ',
'Dirección Postal',
'Fax:',
'Empleado con Salario: Independiente',
'                      Jubilado',
'                      Pensionado',
'                      Fijo ',
'                      Variable',
'                      Otro',
'1-Jurisdicciones principales de donde recibe/envía:',
'                                                Recibe su Efectivo',
'                                                Envía su Efectivo',
'                                                Recibe sus Títulos',
'                                                Envía sus Títulos',
'2-Jurisdicciones principales de donde recibe/envía:',
'                                                Recibe su Efectivo',
'                                                Envía su Efectivo',
'                                                Recibe sus Títulos',
'                                                Envía sus Títulos',
'Nombre del Empleador / Independiente',
'Ingreso Anual: (USD)',
'Salario Anual: (USD)',
'Años en la Empresa',
'Actividad Honorarios Profesionales',
'          Negocio Propio',
'          Ahorro ',
'          Pensión',
'          Salario',
'          Dividendos de Inversión',
'          Otros:',
'Nombre de la Institución',
'País',
'Persona Contacto:',
'Teléfono',
'Nombre de la Institución',
'País',
'Persona Contacto:',
'Teléfono',
'Nombre de la Institución',
'País',
'Persona Contacto:',
'Teléfono',
'Usted estará depositando o transfiriendo Efectivo',
'                                         Títulos Valores',
'Institución de donde Provienen los Fondos:',
'                                          Efectivo',
'                                          Títulos',
'Indique el Monto (USD)Efectivo',
'                  Títulos Valores',
'Institución de donde Provienen los Fondos:Efectivo',
'                                          Títulos',
'                                          Efectivo',
'Tiempo de Relación con la Institución 1',
'                                      2',
'¿Es Ud. Una Persona Políticamente Expuesta (PEP) : Si ?',
'¿Es Ud. Familiar Cercano (............... de PEP : Si ?',
'¿Declara que en los últimos 5 años...ra como PEP?: Si ?',
'Personas autorizadas para instruir órdenes Titular',
'                                           Cotitular',
'                                           Firmante (s)',
'                                           Apoderado',
'Personas autorizadas para instruir órdenesBeneficiario Accionista',
'Autorizado a ....................................... tìtulos y efectivo Titular',
'                                                                        Cotitular',
'                                                                        Firmante (s)',
'                                                                        Apoderado',
'                                                                        Beneficiario Accionista',
'Las órdenes podrán ser colocadas por Correo',
'                                 Documentos Escritos',
'                                 Vía Telefónica',
'                                 Plataformas de Texto',
'                                 Directamente por el Cliente en el Sistema',
'Confirmar las instrucciones emitidas (compra y venta de títulos y valores) : Si',
'De ser afirmativa completar: 1',
'                             2',
'                             3',
'Es voluntad ...de Firmus Financial Inc. a su disposicion y solicitud',
'Si su respuesta es No indique como desea recibir los Estados de Cuenta:Correo',
'                                                                       Apartado Postal',
'Desea recibirlos con periodicidad Mensual',
'                                  Trimestral',
'                                  Semestral',
'                                  Anual',
'Firmus Financial Inc. tomará como correo autorizado .....el mismo',
'Tipo de Firma Conjunta',
'              Indistinta',
'Nombre completo (en imprenta): ',
'Nombre completo (en imprenta): ',
'No. de Documento (ID)',
'No. de Documento (ID)',
'Fecha',
'Fecha',
'Nombre del Corredor',
'Fecha',
'Nombre del Oficial de Cumplimiento:',
'Fecha',
'Nombre del Ejecutivo Principal:',
'Fecha'

);

foreach($rr as  $key => $col )
{				
if ($ir % 2==0)
{	
$ligne= "$key;$col ";		
$data[] = explode(';',trim($ligne));
};
$ir++;
};
					
$nombre_pages=3;
//------------------------------------------------------------------------------------
$pdf->SetFont('Arial','',8);

$pdf->AddPage();
$pdf->BasicTable($header,$data);
$pdf->Output();

//-----------------------------------

?>
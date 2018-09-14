<html>

	<head>
	<?php if($title): ?>
   <?php foreach($title as $ttl): ?>
	<title><?php echo $title->$ttl;  ?></title>
	<?php endforeach; ?>
<?php endif; ?>
		<!-- Bring to you by http://www.CSSTableGenerator.com border: 3px solid red;-->
		
		<meta charset="utf-8"/>
<style type="text/css">
	

	

 span table {  
    border: 1px solid #666666;
    background-color: #cccccc;	
    font-size: 130%;
}
span table tr td{  border: 2px solid #666666; }

div table{border: 1px solid #000000;position: absolute;left: 250px;}
</style>

	</head>

	<body >
	   
		<!-- __________________________________table1______________________________ -->
			<table cellpadding="2" border="0" >
				 <tr>

				 <td width="95">Royaume du Maroc</td>
				  <td></td>
				   <td></td>
				   <td></td>
				   <td></td>
				  <td> المملكة المغربية</td>

				  </tr>
				  <tr>
				 
				 <td width="120">Ministère de l'intérieur</td>
				  <td></td>
				   <td></td>
				   <td></td>
				   <td></td>
				  <td>وزارة الداخلية</td>

				  </tr>
				  <tr>
				 
				 <td width="220">Wilaya de la région de:GRAND-CASABLANCA</td>
				   <td></td>
				     <td width="120"></td>

				  <td width="200" >ولاية جهة : الدارالبيضاء الكبرى</td>
				   <td></td>
				   <td></td>
				   <td></td>
				   <td></td>
				  

				  </tr>
				   <tr>
				 
				 <td width="220">Province ou Préfecture de : BEN M'SICK</td>
				   <td></td>
				     <td width="133"></td>

				  <td width="200" >إقليم أو عمالة : ابن مسيك</td>
				   <td></td>
				   <td></td>
				   <td></td>
				   <td></td>
				  

				  </tr>
				  	   <tr>
				 
				 <td width="220">Commune de BEN M'SICK</td>
				   <td></td>
				     <td width="155"></td>

				  <td width="200" >جماعة : ابن امسيك</td>
				   <td></td>
				   <td></td>
				   <td></td>
				   <td></td>
				  

				  </tr>
				    <tr>
				 
				 <td width="220">Bureau d'état civil : CENTRAL</td>
				   <td></td>
				     <td width="130"></td>

				  <td width="200" >مكتب الحالة المدنية المركزي</td>
				   <td></td>
				   <td></td>
				   <td></td>
				   <td></td>
				  

				  </tr>
				   <tr >
				 
				 <td width="220">Acte n° :</td>
				   <td></td>
				     <td width="186"></td>

				  <td width="220" >رسم رقم :</td>
				   <td></td>
				   <td></td>
				   <td></td>
				   <td></td>
				  

				  </tr>
				   <tr>
				 
				 <td width="260">Année : Grégorienne  01/03/1985  03/01/1310 Hégirienne</td>
				   <td></td>
				     <td width="1"></td>
				  <td width="200" >لسنة : هجرية/ ميلادية 01/03/1985 03/01/1310</td>
				   <td></td>
				   <td></td>
				   <td></td>
				   <td></td>
				  

				  </tr>
               
				 
			</table>
<!-- __________________________________table2______________________________ -->
      
			<table cellpadding="1" cellspacing="0">
				
			<tr>
			     <td width="110" ></td>
			     <span>
			   <table  cellpadding="5" cellspacing="4">
			   <tr>
				<td align="center" width="250">نسخة موجزة من رسم الولادة<br>EXTRAIT D'ACTE DE NAISSANCE</td>
		         </tr>
		         </table>
		         </span>
				<td width="200" ></td>
			</tr>
               
					<tr>
				 <td></td>
				  </tr>
				  <tr>
				 <td></td>
				  </tr>
				  <tr>
				 <td></td>
				  </tr>
				  <tr>
				 <td></td>
				  </tr>
				  <tr>
				 <td></td>
				  </tr>
				  
				 
				  

			</table>
		</span>
		
		<!-- __________________________________table3______________________________ -->
          <?php if($enfants): ?>
          <?php foreach($enfants as $enfant):?>
		<table cellpadding="4" border="0">
			<tr>
				
			<td align="left" width="60">Prénom : </td>
			 <td align="left" width="200"><?php echo $enfant->PrenomE ; ?></td>
		   <td align="right" width="200"><?php echo $enfant->Prenom_ar ; ?></td>
           <td align="right" width="70">الاسم الشخصــي :  </td>
				  
            
			
			</tr>
			
			<tr>
				
			<td align="left" width="60">Nom : </td>
			 <td align="left" width="200"><?php echo $enfant->NomE; ?></td>
		   <td align="right" width="200"><?php echo $enfant->Nom_ar ; ?></td>
           <td align="right" width="70">الاسم العائلــــــي : </td>
				  
            
			
			</tr>
			
			<tr>
				
			<td align="left"  width="60">Né(e) le : </td>
			 <td align="left" width="200"><?php echo $enfant->DateNaiss_arabic_fr; ?></td>
		   <td align="right" width="200"><?php echo $enfant->DateNaiss_arabic_ar ; ?></td>
           <td align="right" width="70">ولد (ت) في يوم  :  </td>
				   
				  
			</tr>
			<tr>
				
			<td align="left" width="95">Correspondant au : </td>
			<td align="left" width="180"><?php echo $enfant->DateNaissE ; ?></td>
		   <td align="right" width="185"><?php echo $enfant->DateNaiss_ar ; ?></td>
           <td align="right" width="70">موافق :  </td>
				   
			
			</tr>
			<tr>
				
			<td align="left"  width="95">Lieu de naissance : </td>
			 <td align="left" width="180"><?php echo $enfant->LieuNaissE ; ?></td>
		   <td align="right" width="185"><?php echo $enfant->LieuNaiss_ar ; ?></td>
           <td align="right" width="70">مكان ولادته (ها ) :  </td>
				   
            
			
			</tr>
			<tr>
				
			<td align="left" width="60">Sexe : </td>
			<td align="left" width="200"><?php echo $enfant->Sexe ; ?></td>
		   <td align="right" width="200"><?php echo $enfant->Sexe_ar ; ?></td>
           <td align="right" width="70">جنسه (ها) :  </td>
				   
            
			
			</tr>
			<tr>
				
			<td align="left" width="70">Nationalité : </td>
			<td align="left" width="190"><?php echo $enfant->Nationalite_fr ; ?></td>
		   <td align="right" width="200"><?php echo $enfant->Nationalitr_ar ; ?></td>
           <td align="right" width="70">جنسيته (ها) : </td>
				   
            
			
			</tr>
			<?php if($allParent): ?>
			<?php foreach($allParent as $parent):?>
				<?php if($enfant->Parent_Cin_M == $parent->Cin_M): ?>
			<tr>
				
			<td align="left" width="75">Fils(Fille) de :  </td>
		    <td align="left" width="185"><?php echo $parent->NomP; ?>&nbsp;&nbsp; <?php echo $parent->PrenomP; ?></td>
		   <td align="right" width="200"> <?php echo $parent->Nom_ar; ?>&nbsp;&nbsp;  <?php echo $parent->Prenom_ar; ?></td>
           <td align="right" width="70">والده(ها) :  </td>
				
            
			
			</tr>
			<?php endif; ?>
			<?php endforeach;?>
			<?php endif; ?>
			<tr>
			<td  align="left" width="280">Mention marginale de décès :</td>
	
           <td align="right" width="250">بيان الوفاة المشار إليه في طرة الرسم : </td>

			
			</tr>
          
               

					<tr>
				 <td></td>
				  </tr>
				
				
		</table>
	<?php endforeach; ?>
	<?php endif; ?>
		<!-- __________________________________table4______________________________ -->
        
        <table cellpadding="1">
        <tr>
        <td>
       
        <div>
		<table cellpadding="4" width="1000">
		<tr>
			<td width="270"></td>
		</tr>
			<tr>
          
			<td width="270" >Extrait certifié conforme au registre de l'état civil par nous :</td>
            <td width="5"></td>
				</tr>

				<tr>
                
				<td width="280">ali alhaddani  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;
            

				 et</td>
				 <td width="10"></td>
				</tr>
				<tr>
             <td width="1"></td>
			<td width="290" >Officier de l'état 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 officier d'état civil par délégation</td>
           <td width="10"></td>
				</tr>

         <tr>
             <td width="1"></td>
			<td width="290" >
			A : BEN M'SICK
			 </td>
           <td width="10"></td>
				</tr>
                 	<tr>
                  <td width="1"></td>
				<td width="290">Le : 31/05/2009</td>
				 <td width="10"></td>
				</tr>
				  <tr>
             <td width="20"></td>
			<td>
			Sceau du bureau d'état civil. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Officier de l'état civil. 
                </td>
           <td width="30"></td>
				</tr>
				 <tr>
             <td width="100"></td>
			<td >Signature :</td>
           <td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
		</table>
		</div>
		
		</td>
		<td width="100"></td>
		<td>
	         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
             
		<div>

		<table cellpadding="4">
		<tr>
			<td width="270"></td>
		</tr>
			<tr>
             <td width="30"></td>
			<td width="230" >نشهد، بصفتنا ضابضا للحالة المدنية، نحن:ضابط الحالة المدنية بالتفويض</td>
            <td width="10"></td>
				</tr>

				<tr>
                  <td width="225"></td>
				<td width="280">علي الحداي</td>
				 <td width="10"></td>
				</tr>
				<tr>
             <td width="1"></td>
			<td width="290" >بمطابقة هذة النسخة لما هو مضمن في سجلات الحالة المدنية بالمكتب المذكور .</td>
           <td width="10"></td>
				</tr>

         <tr>
             <td width="1"></td>
			<td width="290" >
			وحرر ب : ابن امسيك &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 في : 06/06/1430</td>
           <td width="10"></td>
				</tr>
                 	<tr>
                  <td width="180"></td>
				<td width="180">الموافق : 31/05/2009</td>
				 <td width="10"></td>
				</tr>
				  <tr>
             <td width="80"></td>
			<td  >
			طابع مكتب الحالة المدنية &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			ضابط الحالة المدنية</td>
           <td width="30"></td>
				</tr>
				 <tr>
             <td width="130"></td>
			<td >توقيع :</td>
           <td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				
		</table>
		</div>
		
		</td>
		</tr>
		<tr>
			<td></td>
		</tr>
		</table>
		
		<!--_______________________________________table4_______________________________-->
      <table>
      <tr>
      <td width="150">
        <div>
		<table cellpadding="4"> 
      <tr>
      	
      	<td width="80" align="center">
      		  التنبــــر
      		<br><br>
              Timbre
      	</td>
      </tr>
		</table>
		</div>
		</td>
		<td width="100">
			
			<table>
				
				<tr>
					<td align="center" width="400">
	 يعاقب بناء على الفصل 366 من القانون الجنائي بالحبس من 6 أشهر إلى عامين وبغرامة مالية من 120 إلى 1000 درهم أو بإحدى هاتين العقوبتين فقط 
	 من صنع عن علم شهادة تتضمن وقائع غير صحيحة أو زور أو عمل، بأي وسيلة كانت، شهادة صحيحة الأصل ما لم يكن الفعل جريمة أشد
					</td>
					
				</tr>
			</table>
		</td>
		</tr>
	</table>
	</body>
</html>
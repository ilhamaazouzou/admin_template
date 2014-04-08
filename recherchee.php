<?php
$bdd = new PDO('mysql:host=localhost;dbname=paiement','root','');
$do=$bdd->query('select c.*,i.*,a.*, cl.nom_classe from compte c,inscription i, classe cl, annee a where c.id_compte=i.id_compte and i.id_classe=cl.id_classe order by c.id_compte');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TinyTable</title>
    
	<script src="js/modernizr.custom.63321.js" type="text/javascript"></script>   
    <link href="css/cc1/styleResp.css" rel="stylesheet" type="text/css" />
    <!--Css pannel contact-->
    <link href="css/cc1/stylesContact.css" rel="stylesheet" type="text/css" />
    <!--End Css pannel contact-->
    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
   
</head>
<body>

	<div id="tablewrapper" >
		<div id="tableheader">
        	<div class="search">
                <select id="columns" onchange="sorter.search('query')"></select>
                <input type="text" id="query" onkeyup="sorter.search('query')" />
            </div>
            <span class="details">
				<div>Réenitialiser<span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div>
        		<div class="btn-reset"><a class="button blue" href="javascript:sorter.reset()">reset</a></div>
        	</span>
        </div>
        <section>
        <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
            <thead>
            
                <tr>
                    <th class="nosort"><h3>CNE</h3></th>
                    <th><h3 id="ligne">NOM</h3></th>
                    <th><h3>PRENOM</h3></th>
                    <th><h3>ADRESSE</h3></th>
                  
                    <th><h3>ANNE INSCRIPTION</h3></th>
                    <th><h3>CLASSE</h3></th>
                 
                </tr>
               
            </thead>
              <tbody><?php while($r=$do->fetch()){ ?>
              
                <tr >
                 <td > <article id="<?php echo $r['id_compte']; ?>">   <?php echo $r['cne']; ?></article></td>
                   <td > <article id="<?php echo $r['id_compte']; ?>"><?php echo $r['nom']; ?></article></td>
                  <td > <article id="<?php echo $r['id_compte']; ?>"><?php echo $r['prenom']; ?></article></td>
                   <td > <article id="<?php echo $r['id_compte']; ?>"><?php echo $r['adresse']; ?></article></td>
                  
                   <td > <article id="<?php echo $r['id_compte']; ?>"><?php echo $r['id_annee']; ?></article></td>
                 <td > <article id="<?php echo $r['id_compte']; ?>"><?php echo $r['nom_classe']; ?></article></td>
                </tr>
				<?php  } ?>
           
              
            </tbody>
        </table>
        </section>
        <div id="tablefooter">
          <div id="tablenav">
            	<div>
                    <img src="images/first.png" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
                    <img src="images/previous.png" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
                    <img src="images/next.png" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
                    <img src="images/last.png" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
                </div>
                <div>
                	<select  id="pagedropdown"></select>
				</div>
                <div class="btn-reset"><a class="button blue" href="javascript:sorter.showall()">view all</a>
                </div>
            </div>
			<div id="tablelocation">
            <div>
                  <select onchange="sorter.size(this.value)">
                    <option value="5">5</option>
                        <option value="10" selected="selected">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="txt-page">Page</span>
                </div>

            	
                <div class="page txt-txt">Page <span id="currentpage"></span> of <span id="totalpages"></span></div>
            </div>
        </div>
    </div>
<!--- Pannel Contact-->
  <div id="modal">
	<div id="heading" class="heading-color">
		For more info send me an email
	</div>

	<div id="content">
        <div class="txt-subject">
        <p style="margin-left:10px;">Subject: </p></div> 
        <div class="content-subject">
        <input type="text"/></div>
		<div class="txt-email">
        <p style="margin-left:10px;">Email: </p></div> 
        <div class="content-email">
        <p id="email" style=" color:#464747; font:12px;"></p></div>
        <div class="txt-message"><p>Message: </p></div> 
        <div class="content-message">
        <textarea style="width:100%;background-color:#f7fbfe; margin-left:10px; height:100px;"></textarea></div>
        <div class="contact-img"><img src="images/email.png" class="img-contact" alt=""/></div>

		<div style="margin: 0 0 0 10px;"><a href="#" class="button blue position">Send</a></div>
	</div>
</div>
<!---End Pannel Contact-->

	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
	var sorter = new TINY.table.sorter('sorter','table',{
		headclass:'head',
		ascclass:'asc',
		descclass:'desc',
		evenclass:'evenrow',
		oddclass:'oddrow',
		evenselclass:'evenselected',
		oddselclass:'oddselected',
		paginate:true,
		size:10,
		colddid:'columns',
		currentid:'currentpage',
		totalid:'totalpages',
		startingrecid:'startrecord',
		endingrecid:'endrecord',
		totalrecid:'totalrecords',
		hoverid:'selectedrow',
		pageddid:'pagedropdown',
		navid:'tablenav',
		sortcolumn:1,
		sortdir:1,
		columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
		init:true
	});
  </script>
  <!--Script Open Pannel--->
  
 

</body>
</html>
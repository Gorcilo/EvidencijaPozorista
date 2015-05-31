<div class="container" style="padding-bottom:140px;">
<h2>Podaci o predstavi:</h2>
  <h3><?php echo $predstava['naziv']?></h3>
  <p><?php echo $predstava['opis']?></p>
  <p><?php echo $predstava['uloge']?></p>
  
<h3>Ocena: <?php echo $ocena?>  </h3>
  
<h3>Komentari:</h3>
               <table>
                    <tbody>
                         <?php for ($i = 0; $i < count($komentari); ++$i) { ?>
                              <tr>
                                   <td><?php echo $komentari[$i]->tekst; ?></td>
                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
<table border="1" >
                <tr >
                <th rowspan="3" style="text-align:center">Bulan</th>
                <th rowspan="3" style="text-align:center">TOTAL <br> JUMLAH <br> KAPAL <br> RI</th>
                <th rowspan="3" style="text-align:center">TOTAL <br> JUMLAH <br> KAPAL <br> ASING</th>
                <th rowspan="3" style="text-align:center">TOTAL <br> JUMLAH <br> GT <br> RI</th>
                <th rowspan="3" style="text-align:center">TOTAL <br> JUMLAH <br> GT <br> ASING</th>
                <th colspan="4" style="text-align:center" >Total Penumpang</th>
                <th colspan="8" style="text-align:center" >TOTAL PETI KEMAS</th>
                <th colspan="4" style="text-align:center" >TOTAL GENERAL CARGO (GC)/GENCAR</th>
                <th colspan="4" style="text-align:center" >TOTAL BULK CARGO (BC)</th>
                <th colspan="4" style="text-align:center" >TOTAL UNITIZE (UN)</th>
                <th colspan="4" style="text-align:center" >TOTAL CURAH CAIR (CC)</th>
                <th colspan="4" style="text-align:center" >TOTAL CURAH KERING (CK)</th>
                <th colspan="4" style="text-align:center" >TOTAL TERNAK</th>
                <th colspan="4" style="text-align:center" >TOTAL KENDARAAN</th>




                </tr>
                <tr>
                <th colspan="2" style="text-align:center">Dalam Negeri</th>
                <th colspan="2" style="text-align:center">Luar Negeri</th>
                <th colspan="4" style="text-align:center">Dalam Negeri</th>
                <th colspan="4" style="text-align:center">Luar Negeri</th>
                <th colspan="2" style="text-align:center">Dalam Negeri</th>
                <th colspan="2" style="text-align:center">Luar Negeri</th>
                <th colspan="2" style="text-align:center">Dalam Negeri</th>
                <th colspan="2" style="text-align:center">Luar Negeri</th>
                <th colspan="2" style="text-align:center">Dalam Negeri</th>
                <th colspan="2" style="text-align:center">Luar Negeri</th>
                <th colspan="2" style="text-align:center">Dalam Negeri</th>
                <th colspan="2" style="text-align:center">Luar Negeri</th>
                <th colspan="2" style="text-align:center">Dalam Negeri</th>
                <th colspan="2" style="text-align:center">Luar Negeri</th>
                <th colspan="2" style="text-align:center">Dalam Negeri</th>
                <th colspan="2" style="text-align:center">Luar Negeri</th>
                <th colspan="2" style="text-align:center">Dalam Negeri</th>
                <th colspan="2" style="text-align:center">Luar Negeri</th>

                </tr>
                <tr>
                <th style="text-align:center">Turun<br>(orang)</th>
                <th style="text-align:center">Naik<br>(orang)</th>
                <th style="text-align:center">Turun<br>(orang)</th>
                <th style="text-align:center">Naik<br>(orang)</th>

                <th style="text-align:center">BONGKAR<br>(TEUS)</th>
                <th style="text-align:center">MUAT<br>(TEUS)</th>
                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>
                <th style="text-align:center">BONGKAR<br>(TEUS)</th>
                <th style="text-align:center">MUAT<br>(TEUS)</th>
                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>

                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>
                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>

                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>
                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>

                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>
                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>

                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>
                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>

                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>
                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>

                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>
                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>

                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>
                <th style="text-align:center">BONGKAR<br>(TON)</th>
                <th style="text-align:center">MUAT<br>(TON)</th>



                </tr>


                <tr>
                <td><strong>Januari</strong></td>
                <?php         
                foreach($jumlah_januari1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_januari2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_januari1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_januari2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_januari3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_januari20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>Februari</strong></td>
                <?php         
                foreach($jumlah_februari1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_februari2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_februari1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_februari2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_februari3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_februari20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>Maret</strong></td>
                <?php         
                foreach($jumlah_maret1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_maret2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_maret1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_maret2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_maret3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_maret20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>April</strong></td>
                <?php         
                foreach($jumlah_april1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_april2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_april1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_april2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_april3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_april20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>Mei</strong></td>
                <?php         
                foreach($jumlah_mei1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_mei2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_mei1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_mei2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_mei3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_mei20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>Juni</strong></td>
                <?php         
                foreach($jumlah_juni1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_juni2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_juni1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_juni2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_juni3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juni20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>Juli</strong></td>
                <?php         
                foreach($jumlah_juli1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_juli2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_juli1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_juli2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_juli3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_juli20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>Agustus</strong></td>
                <?php         
                foreach($jumlah_agustus1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_agustus2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_agustus1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_agustus2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_agustus3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_agustus20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>September</strong></td>
                <?php         
                foreach($jumlah_september1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_september2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_september1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_september2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_september3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_september20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>Oktober</strong></td>
                <?php         
                foreach($jumlah_oktober1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_oktober2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_oktober1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_oktober2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_oktober3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_oktober20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>November</strong></td>
                <?php         
                foreach($jumlah_november1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_november2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_november1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_november2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_november3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_november20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>Desember</strong></td>
                <?php         
                foreach($jumlah_desember1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_desember2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_desember1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_desember2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_desember3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_desember20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>


                <tr>
                <td><strong>Jumlah</strong></td>
                <?php         
                foreach($jumlah_tahun1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_tahun2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->kapal; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_tahun1 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?>  
                <?php         
                foreach($jumlah_tahun2 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_gt; ?></td>          
                <?php } ?> 


                <?php         
                foreach($jumlah_tahun3 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun4 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun5 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun6 as $rows){ 
                ?>
                <td></td>
                <td></td>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun7 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun8 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun9 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun10 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun11 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun12 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun13 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun14 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun15 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun16 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun17 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun18 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun19 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                <?php         
                foreach($jumlah_tahun20 as $rows){ 
                ?>     
                <td style="text-align:center"><?php echo $rows->jumlah_bongkar; ?></td>
                <td style="text-align:center"><?php echo $rows->jumlah_muat; ?></td>                    
                <?php } ?> 

                
                 
                </tr>
                </table>
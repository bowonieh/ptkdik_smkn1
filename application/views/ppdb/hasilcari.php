<div class="form-horizontal" id="hasilUN">
						  <fieldset>
							<div class="control-group img-responsive center-block">
                                                          <div class="span10"><img class="image img-responsive" src="<?php echo base_url();?>style/img/logo_ppdb.png"/></div>
                                                          
                                                          <!--<span class="img-responsive center-block"></span>
                                                          -->
                                                          <div class="controls span11">
                                                              <hr>
                                                          </div>
                                                            
                                                          
                                                          <span class="pull-right">Pengumuman PPDB Sekolah Model SMK Negeri 1 Kota Bekasi</span>
                                                          
                                                      </div>
                                                      
                                                      
                                                      
							<div class="control-group">
							  <label class="control-label">NO PENDAFTARAN </label>
							  <div class="controls">
								<strong><?php echo $isi->no_pendaftar;?></strong>

                                                              
							  </div>
							</div>
                                                         
							      <div class="control-group">
							  <label class="control-label">NAMA PESERTA </label>
							  <div class="controls">
                                                              
								<strong><?php echo $isi->nama_pendaftar;?></strong>

                                                              
							  </div>
							</div>
                                                      <div class="control-group">
							  <label class="control-label">RATA-RATA MATEMATIKA </label>
							  <div class="controls">
                                                              
								<strong><?php echo $isi->ave_mat;?></strong>

                                                              
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label">RATA-RATA B. Ingris </label>
							  <div class="controls">
                                                              
								<strong><?php echo $isi->ave_bing;?></strong>

                                                              
							  </div>
							</div>
                                                      <div class="control-group">
							  <label class="control-label">RATA-RATA B. indonesia </label>
							  <div class="controls">
                                                              
								<strong><?php echo $isi->ave_bind;?></strong>

                                                              
							  </div>
							</div>
                                                      <div class="control-group">
							  <label class="control-label">RATA-RATA IPA </label>
							  <div class="controls">
                                                              
								<strong><?php echo $isi->ave_ipa;?></strong>

                                                              
							  </div>
							</div>
                                                      <div class="control-group">
							  <label class="control-label">BUTA WARNA </label>
							  <div class="controls">
                                                              
								<strong><?php 
                                                                    if ($isi->buta_warna === '1' ){
                                                                        echo "Tidak Buta Warna";
                                                                    }else{
                                                                        echo "Gagal tes Buta Warna";
                                                                    }
                                                                
                                                                ?></strong>

                                                              
							  </div>
							</div>
                                                      <div class="control-group">
							  <label class="control-label">TES FISIK </label>
							  <div class="controls">
                                                              
								<strong><?php 
                                                                    if ($isi->buta_warna === '1' ){
                                                                        echo "Lulus Tes Kondisi Tubuh";
                                                                    }else{
                                                                        echo "Gagal Tes Kondisi Tubuh";
                                                                    }
                                                                
                                                                ?></strong>

                                                              
							  </div>
							</div>
                                                      <div class="control-group">
							  <label class="control-label">TES PEMINATAN </label>
							  <div class="controls">
                                                              
								<strong><?php  if ($isi->tes_peminatan === '1' ){
                                                                        echo "Lulus Tes Peminatan";
                                                                    }else{
                                                                        echo "Gagal Tes Peminatan";
                                                                    }
                                                                   
                                                                
                                                                ?></strong>

                                                              
							  </div>
							</div>
                                                      
                                                      <hr>
                                                      <div class="control-group">
							  <label class="control-label">Keterangan </label>
							  <div class="controls">
                                                              
								<strong><?php echo $isi->keterangan;?></strong>

                                                              
							  </div>
							</div>
                                                      <div class="control-group">
							  <div class="controls">
								
								<p class="help-block"><?php if ($isi->keterangan === 'LANJUT KE ONLINE') {
                                                                                        echo "Anda bisa melanjutkan proses pendaftaran PPDB Online";
                                                                                    }else{
                                                                                        echo "Maaf anda tidak bisa melanjutkan proses PPDB Online!. Untuk pengambilan berkas, silahkan menghubungi Pantia";
                                                                                    }
                                                                    
                                                                    
                                                                    ?> </p>
							  </div>
							</div>
							<div class="form-actions">
                                                           
                                                          <button class="btn btn-danger" id="Kembali" > <i class="icon-white icon-arrow-left"></i> Kembali</button>
							  
							</div>
						  </fieldset>
						</div>

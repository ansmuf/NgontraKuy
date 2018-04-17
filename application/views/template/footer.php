<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="footer">

        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <h4>Information</h4>
                    <ul class="row">
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo site_url('About')?>">About</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="<?php echo base_url('assets/images/facebook.png')?>" alt="facebook"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/twitter.png')?>" alt="twitter"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/linkedin.png')?>" alt="linkedin"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/instagram.png')?>" alt="instagram"></a>
                </div>

                <div class="col-lg-3 col-sm-3 col-sm-offset-3">
                    <h4>Contact us</h4>
                    <p><b>NgontraKuy Inc.</b><br>
                        <span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
                        <span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com<br>
                        <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890
                    </p>
                </div>
            </div>
            <p class="copyright">Copyright NgontraKuy&copy;<?php echo date('Y')?>. All rights reserved.</p>

        </div>
    </div>
    <!-- Modal -->
    <div id="loginpop" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-6 login">
                        <h4>Login</h4>
                        <form class="" role="form" action="<?php echo site_url('Login')?>">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password">
                            </div>
                            <input type="submit" role="button" class="btn btn-success" value="Sign In"/>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h4>New User Sign Up</h4>
                        <p>Join today and book homes of your dream.</p>
                        <a href="<?php echo site_url('Register')?>" role="button" class="btn btn-info" >Join Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
	<!-- Modal -->
    <div id="TamKon" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Input Rumah</h4>
                        <form class="" role="form" action="<?php echo site_url('Login')?>"> 
							<input type="hidden" id="idkontrakan" name="idkontrakan" value="<?php echo $this->uri->segment(3);?>" />
							<div class="form-group">
                                <label for="ukuran">Id Kontrakan</label>
                                <input type="text" class="form-control" id="idkontrakan" placeholder="RM0001" name="idkontrakan">
                            </div>
                            <div class="form-group">
                                <label for="nmrumah">Nama Rumah</label>
                                <input type="text" class="form-control" id="nmrumah" placeholder="Nama Rumah" name="nmrumah">
                            </div> 
							<div class="form-group">
								<label for="dayatampung">Daya Tampung:</label>
								<select class="form-control" id="dayatampung" name="dayatampung">
									<option selected>Choose...</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div> 
                            <div class="form-group">
                                <label for="ukuran">Ukuran</label>
                                <input type="text" class="form-control" id="ukuran" placeholder="Ukuran" name="ukuran">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" placeholder="Rp." name="harga">
                            </div>
							<div class="form-group">
							<label for="harga">Fasilitas</label>
							<div class="checkbox" id="fasilitas">
								<label><input type="checkbox" value="Kasur">Kasur</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="Ac">Ac</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="Ruang Tamu">Ruang Tamu</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="Kamar Tidur">Kamar Tidur</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="Kamar Mandi">Kamar Mandi</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" value="Dapur">Dapur</label>
							</div>
							</div>
							
							<label class="custom-file">Pilih Gambar
								<input type="file" id="gambar" name="gambar" class="custom-file-input">
								<span class="custom-file-control"></span>
							</label>
							<br>
                            <input type="submit" role="button" class="btn btn-success" value="Create"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
	<!-- Modal -->
    <div id="TamKon2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Input Kontrakan</h4>
                        <form role="form" action="<?php blink('Takon/InsetData')?>" method="post"> 
							<input type="hidden" id="idkontrakan" name="idkontrakan" value="<?php echo $this->uri->segment(3);?>" />
							<div class="form-group">
                                <label for="ukuran">ID User</label>
                                <input type="text" class="form-control" id="iduser" placeholder="ID User" name="iduser">
                            </div>
                            <div class="form-group">
                                <label for="nmrumah">Nama Kontrakan</label>
                                <input type="text" class="form-control" id="nmkontrakan" placeholder="Nama Kontrakan" name="nmkontrakan">
                            </div> 
                            <div class="form-group">
                                <label for="ukuran">No. Telpon</label>
                                <input type="text" class="form-control" id="notelp" placeholder="No. Telpon" name="notelp">
                            </div>
                            <div class="form-group">
                                <label for="harga">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi.." name="deskripsi">
                            </div>
                            <div class="form-group">
                                <label for="harga">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
                            </div>
							<br>
                            <input type="submit" role="button" class="btn btn-success" value="Create"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
</body>
</html>

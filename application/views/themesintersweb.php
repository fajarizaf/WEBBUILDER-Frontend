<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>INTERSWEB | WEB BUILDER APPLICATIONS</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/minify-modal/default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/minify-modal/component.css" />
        <script src="<?php echo base_url(); ?>assets/js/minify-modal/modernizr.custom.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/proses_ajax/member.js"></script>
 
        <noscript><link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/noJS.css" /></noscript>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/styledropdown.css" />



<script type="text/javascript">
 $(document).ready(function(){
        $('div[style=buttonused]').click(function() {
        var datathemes = $(this).attr('dataTemplate');
        $('.themes_dipilih').val(datathemes);
    });
});
</script>


</head>
<body>




<!-- /modal box register -->
        <div class="md-modal md-effect-16" id="modal-16">
            <div class="md-content">
                <h3 style="height:55px;background:#efefef;border-bottom:1px solid #ccc;margin-bottom:20px;">
                    <img src="<?php echo base_url(); ?>assets/pic/logointersweb-dark.png" style="float:left;margin-top:-9px;" width="210px">
                </h3>
                <div>


                <?php $atributes = array ('id' => 'myformRegister'); ?> 
                <?php echo form_open ('member/proses_register', $atributes); ?>
                    
                <table>

                <tr>
                   
                </tr>
                <tr>
                    <td><input type="text" name="nama_lengkap" placeholder="Input Nama Lengkap" /></td>
                </tr>    

                <tr>
                   
                </tr>
                <tr>
                    <td><input type="text" name="username" placeholder="Input Username" /></td>
                </tr>

                <tr>
                   
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Input Password" /></td>
                </tr>

                <tr>
                  
                </tr>
                <tr>
                    <td><input type="text" name="email" placeholder="Input Email" /></td>
                </tr>

                <tr>
                   
                </tr>
                <tr>
                    <td><input type="text" name="no_telp" placeholder="Input No Telp" /></td>
                </tr>

                <tr>
                    
                </tr>
                <tr>
                    <td><input type="text" style="color:red" class="themes_dipilih" name="themes_dipilih"  /></td>
                </tr>
                </table>

                <button  style="margin-left:420px;width:150px;">Daftar</button>
                <div style="float:right;margin-left:10px;margin-top:-30px;margin-right:100px;" class="loadingUpdate"></div>
                <button style="display:none;" class="md-close"></button>

                <?php echo form_close(); ?>

                      
                </div>
            </div>
        </div>





<!-- /modal box Login -->
        <div class="md-modal md-effect-16" id="modal-18">
            <div class="md-content">
                <h3 style="height:55px;background:#efefef;border-bottom:1px solid #ccc;margin-bottom:20px;">
                    <img src="<?php echo base_url(); ?>assets/pic/logointersweb-dark.png" style="float:left;margin-top:-9px;" width="210px">
                </h3>
                <div>
                

                <?php $atributes = array ('id' => 'myformLogin'); ?> 
                <?php echo form_open ('member/login', $atributes); ?>
                    
                <table>

                <tr>
                    <td><input style="width:240px;margin-bottom:10px;" type="text" name="username" placeholder="Username" /></td>
                </tr>    

                <tr>
                    <td><input style="width:240px;" type="password" name="password" placeholder="password" /></td>
                </tr>
                
                </table>

                <button  style="-moz-border-radius:4px 4px 4px;-webkit-border-radius:4px 4px 4px;border-radius:4px 4px 4px;margin-left:3px;width:240px;margin-top:10px;float:left;">Login</button>
                <div style="float:left;margin-left:-40px;margin-top:17px;" class="loadingUpdate"></div>
                <div style="float:left;margin-left:10px;margin-top:10px;" id="sticky"></div>
                <button style="display:none;" class="md-close"></button>
                <div style="clear:both;"></div>
                <?php echo form_close(); ?>

                      
                </div>
            </div>
        </div>




<!-- /list themes -->
        <div class="container">
            <div class="bgheader">
        <div class="systemheader">

        <div style="width:100%;height:50px;background:#3ebef3;border-bottom:2px solid #20b0eb;">
            <div class="header">
                <div style="width:1000px;margin:0px auto;overflow:auto;padding-bottom:50px;">
                <img src="<?php echo base_url(); ?>assets/pic/logointersweb.png" style="float:left;margin-top:-1px;" width="210px">
                <div style="width:100%;height:100px;">
                <br/>

                        <?php if($this->session->userdata('username')) { ?>
                                   

                                   <section class="main" style="margin-top:-43px;">
                                        <div class="wrapper-demo">
                                            <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                                                <span><p style="color:#fff;">Hi,<span style="color:#075f84"><?php echo $this->session->userdata('username') ?></span></p></span>
                                                <ul class="dropdown">
                                                    <li><a href="http://localhost/project/intersweb2/"><i class="icon-envelope icon-large"></i>Edit This Site</a></li>
                                                    <li><a href="#"><i class="icon-truck icon-large"></i>Logout</a></li>
                                                </ul>
                                            </div>
                                        ​</div>
                                    </section>

                        <?php } else { ?>
                                   <div style="width:74px;height:80px;float:right;margin-top:-15px;">
                                   <div class="md-trigger" data-modal="modal-18" style="padding:7px;font-size:16px;">Login</div>
                                   </div>
                                   <div style="width:74px;height:80px;float:right;margin-right:17px;margin-top:-15px;">
                                       <div class="md-trigger"  data-modal="modal-16" style="padding:7px;border:2px solid #fff;-moz-border-radius:3px 3px 3px;-webkit-border-radius:3px 3px 3px;border-radius:3px 3px 3px;font-size:16px;">Sign Up</div>
                                   </div>
                        <?php } ?>   

                </div>


                    <?php foreach ($themes as $row ) { ?>
                        <div class="windowsthemes">
                            
                            <div style="width:100%;height:165px;overflow:hidden;margin-top:20px;border-bottom:1px solid #ccc;">
                            <img style="width:100%;" src="<?php echo base_url() ?>templates/<?php echo $row->name_themes  ?>.png">
                            </div>
                            <div dataTemplate="<?php echo $row->name_themes  ?>" style="buttonused" class="md-trigger" data-modal="modal-16"></div>
                        </div>
                    <?php } ?>

                </div>
            </div>
          </div>    
        </div>    




            </div>
        </div><!-- /container -->


<div class="md-overlay"></div><!-- the overlay element -->






        <script src="<?php echo base_url(); ?>assets/js/minify-modal/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/minify-modal/modalEffects.js"></script>
        <script>
            // this is important for IEs
            var polyfilter_scriptpath = '/assets/js/minify-modal/';
        </script>
        <script src="<?php echo base_url(); ?>assets/js/minify-modal/cssParser.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/minify-modal/css-filters-polyfill.js"></script>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">
            
            function DropDown(el) {
                this.dd = el;
                this.placeholder = this.dd.children('span');
                this.opts = this.dd.find('ul.dropdown > li');
                this.val = '';
                this.index = -1;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                       
                    });

                    
                },
                getValue : function() {
                    return this.val;
                },
                getIndex : function() {
                    return this.index;
                }
            }

            $(function() {

                var dd = new DropDown( $('#dd') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-1').removeClass('active');
                });

            });
            
        </script>


</body>
</html>

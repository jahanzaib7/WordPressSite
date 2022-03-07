<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
<style> .u-header {
  background-image: none;
  min-height: 77px;
}
.u-header .u-image-1 {
  width: 105px;
  height: 65px;
  margin: 12px auto 0 calc(((100% - 1140px) / 2) + -52px);
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-text-1 {
  font-size: 1.125rem;
  font-family: Poppins;
  font-weight: normal;
  margin: -53px auto 0 calc(((100% - 1140px) / 2) + 329px);
}
.u-header .u-menu-1 {
  margin: -39px calc(((100% - 1140px) / 2) + -55px) 15px auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: 0px;
  font-family: Poppins;
  font-weight: 600;
}
.u-block-a4ac-29 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
}
.u-block-a4ac-30 {
  font-size: 1rem;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    margin-top: 21px;
    margin-left: calc(((100% - 1140px) / 2) + 148px);
  }
  .u-header .u-text-1 {
    margin-top: 18px;
    margin-left: calc(((100% - 1140px) / 2) + 480px);
  }
  .u-header .u-menu-1 {
    margin-top: -102px;
    margin-right: calc(((100% - 1140px) / 2) + 273px);
    margin-bottom: 60px;
  }
}
@media (max-width: 991px) {
  .u-header .u-image-1 {
    margin-left: calc(((100% - 1140px) / 2) + 368px);
  }
  .u-header .u-text-1 {
    margin-left: calc(((100% - 1140px) / 2) + 634px);
  }
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 163px);
  }
}
@media (max-width: 767px) {
  .u-header .u-image-1 {
    margin-top: 9px;
    margin-right: calc(((100% - 1140px) / 2) + 217px);
    margin-left: auto;
  }
  .u-header .u-text-1 {
    margin-top: 61px;
    margin-left: calc(((100% - 1140px) / 2) + 761px);
  }
  .u-header .u-menu-1 {
    margin-top: -82px;
    margin-right: calc(((100% - 1140px) / 2) + 73px);
  }
}
@media (max-width: 575px) {
  .u-header .u-image-1 {
    margin-top: 12px;
    margin-right: calc(((100% - 1140px) / 2) + 117px);
  }
  .u-header .u-text-1 {
    margin-left: calc(((100% - 1140px) / 2) + 901px);
  }
  .u-header .u-menu-1 {
    margin-top: -106px;
    margin-right: calc(((100% - 1140px) / 2) + 346px);
  }
}</style>

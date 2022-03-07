<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><!-- #content -->
<?php global $hideFooter; if (!$hideFooter) { ?>
        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-63a8">
  <div class="u-clearfix u-sheet u-sheet-1">
    <p class="u-align-center u-small-text u-text u-text-variant u-text-1">Copyright&nbsp;&nbsp;<span class="u-file-icon u-icon u-text-white"><img src="#15.png" alt=""></span> All Right Reserved by Ease Pro Solutions (Pvt.) Ltd 
    </p>
  </div>
</footer>
        
<?php } ?>
        
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>

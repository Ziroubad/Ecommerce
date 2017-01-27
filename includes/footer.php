        </div>
    </div><br><br><br>
    <footer class="text-center" id="footer">
        &copy; Copyright <?= Date('Y');?>, Vente du Garage
    </footer>


    
    <!-- --------------------------------------------Code javascript---------------------------------------------------------------- -->
    <script>
        jQuery(window).scroll(function(){
            var vscroll = jQuery(this).scrollTop();
            jQuery('#logotext').css({
                "transform" : "translate(0px, "+vscroll/2+"px)"
            });

            var vscroll = jQuery(this).scrollTop();
            jQuery('#back-flower').css({
                "transform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
            });

            var vscroll = jQuery(this).scrollTop();
            jQuery('#fore-flower').css({
                "transform" : "translate(0px, -"+vscroll/2+"px)"
            });      
        });

        //fonction pour gerer le detail de produit
            function detailsModal(id){
                var data = {"id" : id};
                jQuery.ajax({
                    url : '/ecommerce/includes/detailsmodal.php',
                    method : "post",
                    data : data,
                    success : function(data){
                        jQuery('body').append(data);
                        jQuery('#details-modal').modal('toggle');
                    },
                    error : function(){
                        alert('Error!!!!!');
                    }
                });
            }
    </script>
    </body>
</html>
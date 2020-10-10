
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url()?>assets/libs/flot/excanvas.js"></script>
    <script src="<?php echo base_url()?>assets/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url()?>assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url()?>assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/pages/chart/chart-page-init.js"></script>
    <script src="<?php echo base_url()?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo base_url()?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo base_url()?>assets/extra-libs/DataTables/datatables.min.js"></script>


<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();


        $(document).ready(function(){
          $('#catid_Fieldd').change(function(){

            var main_catid=$('#catid_Fieldd').val();
            if(main_catid != '')
            {
                $.ajax({
                  url:"<?php echo base_url()?>Admin/fetch_subcat",
                  method:"POST",
                  data:{cat_id:main_catid},
                  success:function(data)
                  {
                    $('#subcatid_Fieldd').html(data);
                  }

                    });
            }
          }); 





        });


        function passMatch(form,pass,cpass)
        {
            
           if(pass != cpass)
           {
            document.getElementById("notmatchid").hidden = false;
            document.getElementById("btn_add_admin").disabled=true;
            document.getElementById("matchid").hidden=true;
           }
           else
           {
            document.getElementById("notmatchid").hidden = true;
               document.getElementById("matchid").hidden = false;
            document.getElementById("btn_add_admin").disabled=false;
           }
        }
        function changePassMatch(form,pass,cpass)
        {
            if(pass !="")
            {

              document.getElementById("chkid").hidden=true;
               if(pass != cpass)
                {
                  document.getElementById("newnotmatch").hidden = false;
                  document.getElementById("btn_update_pass_admin").disabled=true;
                  document.getElementById("newmatchid").hidden=true;
                }
                else
                {
                  document.getElementById("newnotmatch").hidden = true;
                  document.getElementById("newmatchid").hidden = false;
                  document.getElementById("btn_update_pass_admin").disabled=false;
                }

            }
            else
            {
              document.getElementById("chkid").hidden=false;
            }
          
        }
        function getModal(form,emaill,namee,numberr,subjectt,msgg)
        {
            document.getElementById("m_email").innerHTML=emaill;
            document.getElementById("m_name").innerHTML=namee;
            document.getElementById("m_number").innerHTML=numberr;
            document.getElementById("m_subject").innerHTML=subjectt;
            document.getElementById("m_msg").innerHTML=msgg;

            $(document).ready(function(){
              $("#myModal").modal();
        });
      }




    </script>


<div class="flotTip" style="position: absolute; left: 276px; top: 492px; display: none;"></div></body></html>
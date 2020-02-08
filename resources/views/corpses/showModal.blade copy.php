<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>DEMOS</title>
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <style>
            #btn-close-modal {
                width:100%;
                text-align: center;
                cursor:pointer;
                color:#fff;
            }

        </style>
    </head>
    <body>

        <!--Call your modal-->
        <ul>
            <li><a id="demo01" href="#animatedModal">DEMO01</a></li>
            <li><a id="demo02" href="#modal-02">DEMO02</a></li>
        </ul>


        <!--DEMO01-->
        <div id="animatedModal">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal" class="close-animatedModal">
                CLOSE MODAL
            </div>

            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>

        <!--DEMO02-->
        <div id="modal-02">
            <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
            <div  id="btn-close-modal" class="close-modal-02">
                CLOSE MODAL
            </div>

            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>


        <script src="showModal\js\jquery.min.js"></script>
        <script src="showModal\js\animatedModal.js"></script>
        <script>

            //demo 01
            $("#demo01").animatedModal();

            //demo 02
            $("#demo02").animatedModal({
                animatedIn:'lightSpeedIn',
                animatedOut:'bounceOutDown',
                color:'#3498db',
                // Callbacks
                beforeOpen: function() {
                    alert("The animation was called");
                },
                afterOpen: function() {
                    alert("The animation is completed");
                },
                beforeClose: function() {
                  alert("The animation was called");
                },
                afterClose: function() {
                   alert("The animation is completed");
                }
            });

        </script>

    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!--Title of the Webpage-->
        <title>Simple Web Application</title>

        <!--Link of Boostrap Css sheet-->
        <link href="libraries/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!--Link of Custom Css sheet-->
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Container for the body-->
        <div class="container" >
            <div class="card " >
                <!--Card Header with Banner-->
                <div id="banner" class="card-header bg-muted text-center "> Simple Web App </div>
                <div class="card-body" >
                    <!--<form action="index.php method="POST" >-->
                        <div >
                            <!--Row division sheets for Input Field--> 
                            <div class="row" >
                                <div class="col col-md-12" >
                                    <div class="form-group" >
                                        <label > Place your text in the field below</label> <span style="display: none; float: right" class="alert" id="msg" ></span>
                                        <textarea class="textarea-center form-control" id="inputfield" rows="5" placeholder="Put your text here" ></textarea>
                                    </div>
                                </div>
                            <!--Clossing division sheets for Input Field--> 
                            </div>
                            <!--Row division sheets for buttons--> 
                            <div class="row" >
                                <div class="col text-center">
                                    <button class="btn btn-info  btn-outline totals" id="countvowels"> Total Vowels </button>
                                    <button class="btn btn-info totals" id="countconsonants"> Total Consonants </button>
                                    <button class="btn btn-info totals" id="countwords"> Total Words </button>
                                    <button class="btn btn-info totals" id="countcharacters"> Total Characters </button>
                                </div>
                            <!--Clossing Row division sheets for buttons--> 
                            </div>
                        </div>
                    <!--</form>-->
                </div>
                <!--Card Footer-->
                <div class="card-footer bg-muted text-center" >
                    Developed by Fiagbe Joseph &copy; 2020
                </div>
            <!--Clossing tag of Card-->
            </div>
            <!--Clossing tag of Container-->
        </div>

        <!--Links of some needed Libraries-->
        <!--JQuery Library-->
        <script src="libraries/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <!--Boostrap Library js-->
        <script src="libraries/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <!-- Custom JavaScript-->
        <script src="js/myscript.js" type="text/javascript"></script>
    </body>
</html>

<?php
session_start();


?>
<body>
    <div class="container">
        <div class="row">
            <div class="com-md-6">
                <div class="jumbotron">
                    <h2>
                        welcome <?php echo $_SESSION['User']; ?>                 
                    </h2>
                </div>
            </div>
        </div>
    </div>
</body>
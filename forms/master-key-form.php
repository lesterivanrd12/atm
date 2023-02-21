        
        
        <form action="" method="post" name="">
            <input
                type="text"
                name="master-key"
                id="master-key"
                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                maxlength="9"
                required
            >
            <input
                type="submit"
                value="Submit"
                name="submit"
                
            >


            <?php 
            
                if(isset($_POST['submit'])) {
                    $master_key = $_POST['master-key'];
                }
                
                
            ?>
        </form>
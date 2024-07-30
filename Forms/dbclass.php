<?PHP
class database {

        // ********************************
//        var $HOST =  "5z1d3.myd.infomaniak.com";
//        var $USER =     "5z1d3_Faycal";
//        var $PASS =     "Ed5_4Sj1jB0";
//        var $BDD  =   "5z1d3_Database_forms";
//        var $HOST =  "185.143.101.44";
//        var $USER =     "webuser";
//        var $PASS =     "abcdefg";
//        var $BDD  =   "Forms";
    var $HOST =  "127.0.0.1";
    var $USER =     "root";
    var $PASS =     "";
    var $BDD  =   "firmus_forms";

// ********************************

        var $id_connect;
        var $select_db;
        var $result;
        var $error;


    function connect ()
    {

        $this->id_connect = mysqli_connect($this->HOST, $this->USER, $this->PASS);

        if(!$this->id_connect) {
            $this->error_mysql("Impossible de se connecter � la base de donn�es");
            return 0;
        }

        $this->select_db =@mysqli_select_db($this->id_connect,$this->BDD);

        if(!$this->select_db) {
            $this->error_mysql("Impossible d'acceder � la base de donn�es");
            return 0;
        }
    }


    function query($QUERY)
    {
        $this->result=mysqli_query($this->id_connect,$QUERY);

        if(!$this->result) {
            $this->error_mysql("Probl�me de requ�te");
            return 0;
        }
    }


    function close_mysql()
    {
        mysql_close($this->id_connect);
    }


    function error_mysql($MSG)
    {
        $this->error = @mysql_error($this->id_connect);

        echo "<B>Erreur :</B><BR><I>".$MSG."<BR> ". $this->error ."</I><BR>";
    }


    function fetch_array()
    {
        return @mysqli_fetch_array($this->result);
    }


    function num_rows()
    {
        return @mysql_num_rows($this->result);
    }

}

?>
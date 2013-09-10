function generateQR(){
    $data=json_encode($_REQUEST['data']);
    $file=strtotime(date('YmdHis')).".png";
    $myFile =$_SERVER['DOCUMENT_ROOT']. "/suvi/testQR/".$file;
    $stringData = file_get_contents("http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=".$data."&chld=H|-1");
    //mprd($myFile);
    if ( ! write_file($myFile, $stringData))
    {
    echo "not done";
    }
    else
    {
    echo 'done';
    }
  }

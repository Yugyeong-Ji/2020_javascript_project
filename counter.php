<?php
/*
** 방문자 카운터
*/
function counter () 
{
  $datafile="./counter.dat";
  $file_size=filesize($datafile)+1;
  if(file_exists($datafile)) //데이터 파일이 존재하는지 
  {
    $fp=fopen($datafile,"r"); //파일오픈
    $data=fgets($fp,$file_size); //
    fclose($fp);
    $data++;
    $data_len=strlen("$data");
    $fp=fopen($datafile,"w");
    fputs($fp,$data,$data_len);
    fclose($fp);
    print "$data";
    return 1;
  }
  else 
  {
    print "counter.dat 파일이 존재하지 않습니다.<br>\n";
    return 0;
  }
}
?>
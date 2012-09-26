<?PHP 
  class AlbumShell extends AppShell{
      public $uses= array('Album');
      public function main(){
     //$this->out('Hello world');
     $album=$this->Album->Find('all');
     //$this->out(print_r($album,true));
     foreach($album as $albums)
     {
        $this->out($albums['Album']['name'],true);
     }
}
}
?>

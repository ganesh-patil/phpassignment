<?php
class AlbumsController extends AppController {
public $helpers = array('Html', 'Form');

public function index() {
      // pr($this->Album->find('all',array('recursive' => 2)));
        $this->set('albums', $this->Album->find('all',array('recursive' => 2)));
         $this->set('artists', $this->Album->AlbumsArtist->find('all'));
        $this->set('atags', $this->Album->AlbumsTag->find('all'));
    }
public function view($id = null) {
        $this->Album->id = $id;
        $this->set('album', $this->Album->read());
    }

public function add() {

        if ($this->request->is('post')) {

            $this->Album->create();
           // pr($this->request->data) ; die;

            if ($this->Album->saveAssociated($this->request->data)) {
                $lid=$this->Album->id;
                $artist=$this->request->data['Artist'];
                $albumartist=array("album_id","artist_id");
                $albumartistsend=array();
                $index=0;
                foreach($artist as $artists)
                {
                    if(($artists['id'])!=0)
                    {
                    $albumartist['album_id']=$lid;
                    $albumartist['artist_id']=$artists['id'];
                    $albumartistsend[$index++]=$albumartist;
                    }
                }

                $albumartistfinalsend=$albumartistsend;
                $this->Album->AlbumsArtist->saveAll($albumartistfinalsend);


                $tag=$this->request->data['Tag'];
                $albumtag=array("album_id","tag_id");
                $tagsend=array();
                $index=0;

                foreach($tag as $tags)
                {
                    if(($tags['id'])!=0)
                    {
                        $albumtag['album_id']=$lid;
                        $albumtag['tag_id']=$tags['id'];
                        $tagsend[$index++]=$albumtag;
                    }
                }

                $tagfinalsend=$tagsend;
                $this->Album->AlbumsTag->saveAll($tagfinalsend);

                $this->Session->setFlash('Your album has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your album.');
            }
        }
        else
        {
          $this->set('artists',$this->Album->AlbumsArtist->Artist->find('all'));
          $this->set('tags',$this->Album->AlbumsTag->Tag->find('all'));
        }
}

public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Album->delete($id)) {
        $this->Session->setFlash('The album with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
}
?>

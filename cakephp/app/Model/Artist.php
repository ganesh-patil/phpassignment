<?php
class Artist extends AppModel {
    public $name = 'Artist';
   /* public $hasAndBelongsToMany = array(
        'Album' =>
            array(
                'className'              => 'Album',
                'joinTable'              => 'albums_artists',
                'foreignKey'             => 'artist_id',
                'associationForeignKey'  => 'album_id',
                'unique'                 => true,
                'conditions'             => '',
                'fields'                 => '',
                'order'                  => '',
                'limit'                  => '',
                'offset'                 => '',
                'finderQuery'            => '',
                'deleteQuery'            => '',
                'insertQuery'            => ''
            )
    ); */
    
    public $hasMany = array(
        'AlbumsArtist' => array(
            'className'     => 'AlbumsArtist',
            'foreignKey'    => 'artist_id',            
            'dependent'     => true
        )
    );
   
    
    
}

?>

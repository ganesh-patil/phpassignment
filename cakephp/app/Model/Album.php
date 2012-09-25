<?php
class Album extends AppModel {
    public $name = 'Album';
  /*  public $hasAndBelongsToMany = array(
        'Artist' =>
            array(
                'className'              => 'Artist',
                'joinTable'              => 'albums_artists',
                'foreignKey'             => 'album_id',
                'associationForeignKey'  => 'artist_id',
                'unique'                 => true,
                'conditions'             => '',
                'fields'                 => '',
                'order'                  => '',
                'limit'                  => '',
                'offset'                 => '',
                'finderQuery'            => '',
                'deleteQuery'            => '',
                'insertQuery'            => ''
            ),
'Tag' =>
            array(
                'className'              => 'Tag',
                'joinTable'              => 'albums_tags',
                'foreignKey'             => 'album_id',
                'associationForeignKey'  => 'tag_id',
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
    );
*/


public $hasMany = array(
        'AlbumsArtist' => array(
            'className'     => 'AlbumsArtist',
            'foreignKey'    => 'album_id',
            'dependent'     => true
        ),
        'AlbumsTag' => array(
            'className'     => 'AlbumsTag',
            'foreignKey'    => 'album_id',
            
            'dependent'     => true
        )
    );
    
    
/*    
    public $hasMany = array(
        'Artist' => array(
            'className' => 'Artist'
        )
    );
    */
}
?>


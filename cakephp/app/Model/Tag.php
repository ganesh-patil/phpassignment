<?php
class Tag extends AppModel {
    public $name = 'Tag';
   /* public $hasAndBelongsToMany = array(
        'Album' =>
            array(
                'className'              => 'Album',
                'joinTable'              => 'albums_tags',
                'foreignKey'             => 'tag_id',
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
        'AlbumsTag' => array(
            'className'     => 'AlbumsTag',
            'foreignKey'    => 'tag_id',
           
            'dependent'     => true
        )
    );
    
}

?>

<?PHP
    // Stick your DBOjbect subclasses in here (to help keep things tidy).

    class User extends DBObject
    {
        public function __construct($id = null)
        {
            parent::__construct('users', array('nid', 'username', 'password', 'level', 'token'), $id);
        }
    }

    class Update extends DBObject
    {
        public function __construct($id = null)
        {
            parent::__construct('updates', array('user_id', 'dt', 'latitude', 'longitude'), $id);
        }
    }

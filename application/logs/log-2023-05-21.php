<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2023-05-21 23:16:39 --> Config Class Initialized
INFO - 2023-05-21 23:16:39 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:16:39 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:16:39 --> Utf8 Class Initialized
INFO - 2023-05-21 23:16:39 --> URI Class Initialized
DEBUG - 2023-05-21 23:16:39 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:16:39 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:16:39 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:16:39 --> Router Class Initialized
INFO - 2023-05-21 23:16:39 --> Output Class Initialized
INFO - 2023-05-21 23:16:39 --> Security Class Initialized
DEBUG - 2023-05-21 23:16:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:16:39 --> Input Class Initialized
INFO - 2023-05-21 23:16:39 --> Language Class Initialized
DEBUG - 2023-05-21 23:16:39 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:16:39 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:16:39 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:16:39 --> Loader Class Initialized
INFO - 2023-05-21 23:16:39 --> Helper loaded: url_helper
INFO - 2023-05-21 23:16:39 --> Helper loaded: file_helper
INFO - 2023-05-21 23:16:39 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:16:39 --> Helper loaded: main_helper
INFO - 2023-05-21 23:16:39 --> Database Driver Class Initialized
INFO - 2023-05-21 23:16:39 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:16:39 --> Email Class Initialized
INFO - 2023-05-21 23:16:39 --> Controller Class Initialized
DEBUG - 2023-05-21 23:16:39 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:16:39 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:16:39 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:16:39 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:16:39 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

ERROR - 2023-05-21 23:16:39 --> Unable to load the requested class: Navigasi
INFO - 2023-05-21 23:19:50 --> Config Class Initialized
INFO - 2023-05-21 23:19:50 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:19:50 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:19:50 --> Utf8 Class Initialized
INFO - 2023-05-21 23:19:50 --> URI Class Initialized
DEBUG - 2023-05-21 23:19:50 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:19:50 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:19:50 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:19:50 --> Router Class Initialized
INFO - 2023-05-21 23:19:50 --> Output Class Initialized
INFO - 2023-05-21 23:19:50 --> Security Class Initialized
DEBUG - 2023-05-21 23:19:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:19:50 --> Input Class Initialized
INFO - 2023-05-21 23:19:50 --> Language Class Initialized
DEBUG - 2023-05-21 23:19:50 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:19:50 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:19:50 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:19:50 --> Loader Class Initialized
INFO - 2023-05-21 23:19:50 --> Helper loaded: url_helper
INFO - 2023-05-21 23:19:50 --> Helper loaded: file_helper
INFO - 2023-05-21 23:19:50 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:19:50 --> Helper loaded: main_helper
INFO - 2023-05-21 23:19:50 --> Database Driver Class Initialized
INFO - 2023-05-21 23:19:50 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:19:50 --> Email Class Initialized
INFO - 2023-05-21 23:19:50 --> Controller Class Initialized
DEBUG - 2023-05-21 23:19:50 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:19:50 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:19:50 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:19:50 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:19:50 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

ERROR - 2023-05-21 23:19:50 --> Unable to load the requested class: Navigasi
INFO - 2023-05-21 23:22:55 --> Config Class Initialized
INFO - 2023-05-21 23:22:55 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:22:55 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:22:55 --> Utf8 Class Initialized
INFO - 2023-05-21 23:22:55 --> URI Class Initialized
DEBUG - 2023-05-21 23:22:55 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:22:55 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:22:55 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:22:55 --> Router Class Initialized
INFO - 2023-05-21 23:22:55 --> Output Class Initialized
INFO - 2023-05-21 23:22:55 --> Security Class Initialized
DEBUG - 2023-05-21 23:22:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:22:55 --> Input Class Initialized
INFO - 2023-05-21 23:22:55 --> Language Class Initialized
DEBUG - 2023-05-21 23:22:55 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:22:55 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:22:55 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:22:56 --> Loader Class Initialized
INFO - 2023-05-21 23:22:56 --> Helper loaded: url_helper
INFO - 2023-05-21 23:22:56 --> Helper loaded: file_helper
INFO - 2023-05-21 23:22:56 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:22:56 --> Helper loaded: main_helper
INFO - 2023-05-21 23:22:56 --> Database Driver Class Initialized
INFO - 2023-05-21 23:22:56 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:22:56 --> Email Class Initialized
INFO - 2023-05-21 23:22:56 --> Controller Class Initialized
DEBUG - 2023-05-21 23:22:56 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:22:56 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:22:56 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:22:56 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:22:56 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

ERROR - 2023-05-21 23:22:56 --> Severity: Warning --> Undefined property: stdClass::$level /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/libraries/Datatables.php 111
INFO - 2023-05-21 23:31:37 --> Config Class Initialized
INFO - 2023-05-21 23:31:37 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:31:37 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:31:37 --> Utf8 Class Initialized
INFO - 2023-05-21 23:31:37 --> URI Class Initialized
DEBUG - 2023-05-21 23:31:37 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:31:37 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:31:37 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:31:37 --> Router Class Initialized
INFO - 2023-05-21 23:31:37 --> Output Class Initialized
INFO - 2023-05-21 23:31:37 --> Security Class Initialized
DEBUG - 2023-05-21 23:31:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:31:37 --> Input Class Initialized
INFO - 2023-05-21 23:31:37 --> Language Class Initialized
DEBUG - 2023-05-21 23:31:37 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:31:37 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:31:37 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:31:37 --> Loader Class Initialized
INFO - 2023-05-21 23:31:37 --> Helper loaded: url_helper
INFO - 2023-05-21 23:31:37 --> Helper loaded: file_helper
INFO - 2023-05-21 23:31:37 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:31:37 --> Helper loaded: main_helper
INFO - 2023-05-21 23:31:37 --> Database Driver Class Initialized
INFO - 2023-05-21 23:31:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:31:37 --> Email Class Initialized
INFO - 2023-05-21 23:31:37 --> Controller Class Initialized
DEBUG - 2023-05-21 23:31:37 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:31:37 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:31:37 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:31:37 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:31:37 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:31:44 --> Config Class Initialized
INFO - 2023-05-21 23:31:44 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:31:44 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:31:44 --> Utf8 Class Initialized
INFO - 2023-05-21 23:31:44 --> URI Class Initialized
DEBUG - 2023-05-21 23:31:44 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:31:44 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:31:44 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:31:44 --> Router Class Initialized
INFO - 2023-05-21 23:31:44 --> Output Class Initialized
INFO - 2023-05-21 23:31:44 --> Security Class Initialized
DEBUG - 2023-05-21 23:31:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:31:44 --> Input Class Initialized
INFO - 2023-05-21 23:31:44 --> Language Class Initialized
DEBUG - 2023-05-21 23:31:44 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:31:44 --> FIX Method ====> index
INFO - 2023-05-21 23:31:44 --> Loader Class Initialized
INFO - 2023-05-21 23:31:44 --> Helper loaded: url_helper
INFO - 2023-05-21 23:31:44 --> Helper loaded: file_helper
INFO - 2023-05-21 23:31:44 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:31:44 --> Helper loaded: main_helper
INFO - 2023-05-21 23:31:44 --> Database Driver Class Initialized
INFO - 2023-05-21 23:31:44 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:31:44 --> Email Class Initialized
INFO - 2023-05-21 23:31:44 --> Controller Class Initialized
DEBUG - 2023-05-21 23:31:44 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:31:44 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:31:44 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:31:44 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:31:44 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:31:44 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:31:44 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:31:44 --> Final output sent to browser
DEBUG - 2023-05-21 23:31:44 --> Total execution time: 0.1304
INFO - 2023-05-21 23:31:46 --> Config Class Initialized
INFO - 2023-05-21 23:31:46 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:31:46 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:31:46 --> Utf8 Class Initialized
INFO - 2023-05-21 23:31:46 --> URI Class Initialized
DEBUG - 2023-05-21 23:31:46 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:31:46 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:31:46 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:31:46 --> Router Class Initialized
INFO - 2023-05-21 23:31:46 --> Output Class Initialized
INFO - 2023-05-21 23:31:46 --> Security Class Initialized
DEBUG - 2023-05-21 23:31:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:31:46 --> Input Class Initialized
INFO - 2023-05-21 23:31:46 --> Language Class Initialized
DEBUG - 2023-05-21 23:31:46 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:31:46 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:31:46 --> Config Class Initialized
INFO - 2023-05-21 23:31:46 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:31:46 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:31:46 --> Utf8 Class Initialized
INFO - 2023-05-21 23:31:46 --> URI Class Initialized
DEBUG - 2023-05-21 23:31:46 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:31:46 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:31:46 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:31:46 --> Router Class Initialized
INFO - 2023-05-21 23:31:46 --> Output Class Initialized
INFO - 2023-05-21 23:31:46 --> Security Class Initialized
DEBUG - 2023-05-21 23:31:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:31:46 --> Input Class Initialized
INFO - 2023-05-21 23:31:46 --> Language Class Initialized
DEBUG - 2023-05-21 23:31:46 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:31:46 --> FIX Method ====> index
INFO - 2023-05-21 23:31:46 --> Loader Class Initialized
INFO - 2023-05-21 23:31:46 --> Helper loaded: url_helper
INFO - 2023-05-21 23:31:46 --> Helper loaded: file_helper
INFO - 2023-05-21 23:31:46 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:31:46 --> Helper loaded: main_helper
INFO - 2023-05-21 23:31:46 --> Database Driver Class Initialized
INFO - 2023-05-21 23:31:46 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:31:46 --> Email Class Initialized
INFO - 2023-05-21 23:31:46 --> Controller Class Initialized
DEBUG - 2023-05-21 23:31:46 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:31:46 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:31:46 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:31:46 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:31:46 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:31:46 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:31:46 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:31:46 --> Final output sent to browser
DEBUG - 2023-05-21 23:31:46 --> Total execution time: 0.0961
INFO - 2023-05-21 23:31:47 --> Config Class Initialized
INFO - 2023-05-21 23:31:47 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:31:47 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:31:47 --> Utf8 Class Initialized
INFO - 2023-05-21 23:31:47 --> URI Class Initialized
DEBUG - 2023-05-21 23:31:47 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:31:47 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:31:47 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:31:47 --> Router Class Initialized
INFO - 2023-05-21 23:31:47 --> Output Class Initialized
INFO - 2023-05-21 23:31:47 --> Security Class Initialized
DEBUG - 2023-05-21 23:31:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:31:47 --> Input Class Initialized
INFO - 2023-05-21 23:31:47 --> Language Class Initialized
DEBUG - 2023-05-21 23:31:47 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:31:47 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:31:47 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:31:47 --> Loader Class Initialized
INFO - 2023-05-21 23:31:47 --> Helper loaded: url_helper
INFO - 2023-05-21 23:31:47 --> Helper loaded: file_helper
INFO - 2023-05-21 23:31:47 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:31:47 --> Helper loaded: main_helper
INFO - 2023-05-21 23:31:47 --> Database Driver Class Initialized
INFO - 2023-05-21 23:31:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:31:47 --> Email Class Initialized
INFO - 2023-05-21 23:31:47 --> Controller Class Initialized
DEBUG - 2023-05-21 23:31:47 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:31:47 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:31:47 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:31:47 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:31:47 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:35:37 --> Config Class Initialized
INFO - 2023-05-21 23:35:37 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:35:37 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:35:37 --> Utf8 Class Initialized
INFO - 2023-05-21 23:35:37 --> URI Class Initialized
DEBUG - 2023-05-21 23:35:37 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:35:37 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:35:37 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:35:37 --> Router Class Initialized
INFO - 2023-05-21 23:35:37 --> Output Class Initialized
INFO - 2023-05-21 23:35:37 --> Security Class Initialized
DEBUG - 2023-05-21 23:35:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:35:37 --> Input Class Initialized
INFO - 2023-05-21 23:35:37 --> Language Class Initialized
DEBUG - 2023-05-21 23:35:37 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:35:37 --> FIX Method ====> index
INFO - 2023-05-21 23:35:37 --> Loader Class Initialized
INFO - 2023-05-21 23:35:37 --> Helper loaded: url_helper
INFO - 2023-05-21 23:35:37 --> Helper loaded: file_helper
INFO - 2023-05-21 23:35:37 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:35:37 --> Helper loaded: main_helper
INFO - 2023-05-21 23:35:37 --> Database Driver Class Initialized
INFO - 2023-05-21 23:35:37 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:35:37 --> Email Class Initialized
INFO - 2023-05-21 23:35:37 --> Controller Class Initialized
DEBUG - 2023-05-21 23:35:37 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:35:37 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:35:37 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:35:37 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:35:37 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:35:37 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:35:37 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:35:37 --> Final output sent to browser
DEBUG - 2023-05-21 23:35:37 --> Total execution time: 0.1751
INFO - 2023-05-21 23:35:38 --> Config Class Initialized
INFO - 2023-05-21 23:35:38 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:35:38 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:35:38 --> Utf8 Class Initialized
INFO - 2023-05-21 23:35:38 --> URI Class Initialized
DEBUG - 2023-05-21 23:35:38 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:35:38 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:35:38 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:35:38 --> Router Class Initialized
INFO - 2023-05-21 23:35:38 --> Output Class Initialized
INFO - 2023-05-21 23:35:38 --> Security Class Initialized
DEBUG - 2023-05-21 23:35:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:35:38 --> Input Class Initialized
INFO - 2023-05-21 23:35:38 --> Language Class Initialized
DEBUG - 2023-05-21 23:35:38 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:35:38 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:35:40 --> Config Class Initialized
INFO - 2023-05-21 23:35:40 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:35:40 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:35:40 --> Utf8 Class Initialized
INFO - 2023-05-21 23:35:40 --> URI Class Initialized
DEBUG - 2023-05-21 23:35:40 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:35:40 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:35:40 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:35:40 --> Router Class Initialized
INFO - 2023-05-21 23:35:40 --> Output Class Initialized
INFO - 2023-05-21 23:35:40 --> Security Class Initialized
DEBUG - 2023-05-21 23:35:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:35:40 --> Input Class Initialized
INFO - 2023-05-21 23:35:40 --> Language Class Initialized
DEBUG - 2023-05-21 23:35:40 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:35:40 --> FIX Method ====> index
INFO - 2023-05-21 23:35:40 --> Loader Class Initialized
INFO - 2023-05-21 23:35:40 --> Helper loaded: url_helper
INFO - 2023-05-21 23:35:40 --> Helper loaded: file_helper
INFO - 2023-05-21 23:35:40 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:35:40 --> Helper loaded: main_helper
INFO - 2023-05-21 23:35:40 --> Database Driver Class Initialized
INFO - 2023-05-21 23:35:40 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:35:40 --> Email Class Initialized
INFO - 2023-05-21 23:35:40 --> Controller Class Initialized
DEBUG - 2023-05-21 23:35:40 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:35:40 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:35:40 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:35:40 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:35:40 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:35:40 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:35:40 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:35:40 --> Final output sent to browser
DEBUG - 2023-05-21 23:35:40 --> Total execution time: 0.1020
INFO - 2023-05-21 23:35:40 --> Config Class Initialized
INFO - 2023-05-21 23:35:40 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:35:40 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:35:40 --> Utf8 Class Initialized
INFO - 2023-05-21 23:35:40 --> URI Class Initialized
DEBUG - 2023-05-21 23:35:40 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:35:40 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:35:40 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:35:40 --> Router Class Initialized
INFO - 2023-05-21 23:35:40 --> Output Class Initialized
INFO - 2023-05-21 23:35:40 --> Security Class Initialized
DEBUG - 2023-05-21 23:35:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:35:40 --> Input Class Initialized
INFO - 2023-05-21 23:35:40 --> Language Class Initialized
DEBUG - 2023-05-21 23:35:40 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:35:40 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:35:40 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:35:40 --> Loader Class Initialized
INFO - 2023-05-21 23:35:40 --> Helper loaded: url_helper
INFO - 2023-05-21 23:35:40 --> Helper loaded: file_helper
INFO - 2023-05-21 23:35:40 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:35:40 --> Helper loaded: main_helper
INFO - 2023-05-21 23:35:40 --> Database Driver Class Initialized
INFO - 2023-05-21 23:35:40 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:35:40 --> Email Class Initialized
INFO - 2023-05-21 23:35:40 --> Controller Class Initialized
DEBUG - 2023-05-21 23:35:40 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:35:40 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:35:40 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:35:40 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:35:40 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:36:30 --> Config Class Initialized
INFO - 2023-05-21 23:36:30 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:36:30 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:36:30 --> Utf8 Class Initialized
INFO - 2023-05-21 23:36:30 --> URI Class Initialized
DEBUG - 2023-05-21 23:36:30 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:36:30 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:36:30 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:36:30 --> Router Class Initialized
INFO - 2023-05-21 23:36:30 --> Output Class Initialized
INFO - 2023-05-21 23:36:30 --> Security Class Initialized
DEBUG - 2023-05-21 23:36:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:36:30 --> Input Class Initialized
INFO - 2023-05-21 23:36:30 --> Language Class Initialized
DEBUG - 2023-05-21 23:36:30 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:36:30 --> FIX Method ====> index
INFO - 2023-05-21 23:36:30 --> Loader Class Initialized
INFO - 2023-05-21 23:36:30 --> Helper loaded: url_helper
INFO - 2023-05-21 23:36:30 --> Helper loaded: file_helper
INFO - 2023-05-21 23:36:30 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:36:30 --> Helper loaded: main_helper
INFO - 2023-05-21 23:36:30 --> Database Driver Class Initialized
INFO - 2023-05-21 23:36:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:36:30 --> Email Class Initialized
INFO - 2023-05-21 23:36:30 --> Controller Class Initialized
DEBUG - 2023-05-21 23:36:30 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:36:30 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:36:30 --> === Menu (Current Url) ===Array
(
    [6] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:36:30 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:36:30 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:36:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:36:31 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:36:31 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:36:31 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:36:31 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:36:31 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:36:31 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:36:31 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:36:31 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:36:31 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:36:31 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:36:31 --> Final output sent to browser
DEBUG - 2023-05-21 23:36:31 --> Total execution time: 0.6579
INFO - 2023-05-21 23:36:33 --> Config Class Initialized
INFO - 2023-05-21 23:36:33 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:36:33 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:36:33 --> Utf8 Class Initialized
INFO - 2023-05-21 23:36:33 --> URI Class Initialized
DEBUG - 2023-05-21 23:36:33 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:36:33 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:36:33 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:36:33 --> Router Class Initialized
INFO - 2023-05-21 23:36:33 --> Output Class Initialized
INFO - 2023-05-21 23:36:33 --> Security Class Initialized
DEBUG - 2023-05-21 23:36:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:36:33 --> Input Class Initialized
INFO - 2023-05-21 23:36:33 --> Language Class Initialized
DEBUG - 2023-05-21 23:36:33 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:36:33 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:36:35 --> Config Class Initialized
INFO - 2023-05-21 23:36:35 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:36:35 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:36:35 --> Utf8 Class Initialized
INFO - 2023-05-21 23:36:35 --> URI Class Initialized
DEBUG - 2023-05-21 23:36:35 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:36:35 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:36:35 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:36:35 --> Router Class Initialized
INFO - 2023-05-21 23:36:35 --> Output Class Initialized
INFO - 2023-05-21 23:36:35 --> Security Class Initialized
DEBUG - 2023-05-21 23:36:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:36:35 --> Input Class Initialized
INFO - 2023-05-21 23:36:35 --> Language Class Initialized
DEBUG - 2023-05-21 23:36:35 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:36:35 --> FIX Method ====> index
INFO - 2023-05-21 23:36:35 --> Loader Class Initialized
INFO - 2023-05-21 23:36:35 --> Helper loaded: url_helper
INFO - 2023-05-21 23:36:35 --> Helper loaded: file_helper
INFO - 2023-05-21 23:36:35 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:36:35 --> Helper loaded: main_helper
INFO - 2023-05-21 23:36:35 --> Database Driver Class Initialized
INFO - 2023-05-21 23:36:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:36:35 --> Email Class Initialized
INFO - 2023-05-21 23:36:35 --> Controller Class Initialized
DEBUG - 2023-05-21 23:36:35 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:36:35 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:36:35 --> === Menu (Current Url) ===Array
(
    [6] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:36:35 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:36:35 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:36:35 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:36:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:36:35 --> Final output sent to browser
DEBUG - 2023-05-21 23:36:35 --> Total execution time: 0.0961
INFO - 2023-05-21 23:36:36 --> Config Class Initialized
INFO - 2023-05-21 23:36:36 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:36:36 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:36:36 --> Utf8 Class Initialized
INFO - 2023-05-21 23:36:36 --> URI Class Initialized
DEBUG - 2023-05-21 23:36:36 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:36:36 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:36:36 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:36:36 --> Router Class Initialized
INFO - 2023-05-21 23:36:36 --> Output Class Initialized
INFO - 2023-05-21 23:36:36 --> Security Class Initialized
DEBUG - 2023-05-21 23:36:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:36:36 --> Input Class Initialized
INFO - 2023-05-21 23:36:36 --> Language Class Initialized
DEBUG - 2023-05-21 23:36:36 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:36:36 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:36:36 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:36:36 --> Loader Class Initialized
INFO - 2023-05-21 23:36:36 --> Helper loaded: url_helper
INFO - 2023-05-21 23:36:36 --> Helper loaded: file_helper
INFO - 2023-05-21 23:36:36 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:36:36 --> Helper loaded: main_helper
INFO - 2023-05-21 23:36:36 --> Database Driver Class Initialized
INFO - 2023-05-21 23:36:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:36:36 --> Email Class Initialized
INFO - 2023-05-21 23:36:36 --> Controller Class Initialized
DEBUG - 2023-05-21 23:36:36 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:36:36 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:36:36 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:36:36 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:36:47 --> Config Class Initialized
INFO - 2023-05-21 23:36:47 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:36:47 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:36:47 --> Utf8 Class Initialized
INFO - 2023-05-21 23:36:47 --> URI Class Initialized
DEBUG - 2023-05-21 23:36:47 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:36:47 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:36:47 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:36:47 --> Router Class Initialized
INFO - 2023-05-21 23:36:47 --> Output Class Initialized
INFO - 2023-05-21 23:36:47 --> Security Class Initialized
DEBUG - 2023-05-21 23:36:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:36:47 --> Input Class Initialized
INFO - 2023-05-21 23:36:47 --> Language Class Initialized
DEBUG - 2023-05-21 23:36:47 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:36:47 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:36:47 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:36:47 --> Loader Class Initialized
INFO - 2023-05-21 23:36:47 --> Helper loaded: url_helper
INFO - 2023-05-21 23:36:47 --> Helper loaded: file_helper
INFO - 2023-05-21 23:36:47 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:36:47 --> Helper loaded: main_helper
INFO - 2023-05-21 23:36:47 --> Database Driver Class Initialized
INFO - 2023-05-21 23:36:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:36:47 --> Email Class Initialized
INFO - 2023-05-21 23:36:47 --> Controller Class Initialized
DEBUG - 2023-05-21 23:36:47 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:36:47 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:36:47 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:36:47 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:37:16 --> Config Class Initialized
INFO - 2023-05-21 23:37:16 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:37:16 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:37:16 --> Utf8 Class Initialized
INFO - 2023-05-21 23:37:16 --> URI Class Initialized
DEBUG - 2023-05-21 23:37:16 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:37:16 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:37:16 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:37:16 --> Router Class Initialized
INFO - 2023-05-21 23:37:16 --> Output Class Initialized
INFO - 2023-05-21 23:37:16 --> Security Class Initialized
DEBUG - 2023-05-21 23:37:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:37:16 --> Input Class Initialized
INFO - 2023-05-21 23:37:16 --> Language Class Initialized
DEBUG - 2023-05-21 23:37:16 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:37:16 --> FIX Method ====> index
INFO - 2023-05-21 23:37:16 --> Loader Class Initialized
INFO - 2023-05-21 23:37:16 --> Helper loaded: url_helper
INFO - 2023-05-21 23:37:16 --> Helper loaded: file_helper
INFO - 2023-05-21 23:37:16 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:37:16 --> Helper loaded: main_helper
INFO - 2023-05-21 23:37:16 --> Database Driver Class Initialized
INFO - 2023-05-21 23:37:16 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:37:16 --> Email Class Initialized
INFO - 2023-05-21 23:37:16 --> Controller Class Initialized
DEBUG - 2023-05-21 23:37:16 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:37:16 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:37:16 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:37:16 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:37:16 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:37:16 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:37:16 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:37:16 --> Final output sent to browser
DEBUG - 2023-05-21 23:37:16 --> Total execution time: 0.0992
INFO - 2023-05-21 23:37:17 --> Config Class Initialized
INFO - 2023-05-21 23:37:17 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:37:17 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:37:17 --> Utf8 Class Initialized
INFO - 2023-05-21 23:37:17 --> URI Class Initialized
DEBUG - 2023-05-21 23:37:17 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:37:17 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:37:17 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:37:17 --> Router Class Initialized
INFO - 2023-05-21 23:37:17 --> Output Class Initialized
INFO - 2023-05-21 23:37:17 --> Security Class Initialized
DEBUG - 2023-05-21 23:37:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:37:17 --> Input Class Initialized
INFO - 2023-05-21 23:37:17 --> Language Class Initialized
DEBUG - 2023-05-21 23:37:17 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:37:17 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:37:18 --> Config Class Initialized
INFO - 2023-05-21 23:37:18 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:37:18 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:37:18 --> Utf8 Class Initialized
INFO - 2023-05-21 23:37:18 --> URI Class Initialized
DEBUG - 2023-05-21 23:37:18 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:37:18 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:37:18 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:37:18 --> Router Class Initialized
INFO - 2023-05-21 23:37:18 --> Output Class Initialized
INFO - 2023-05-21 23:37:18 --> Security Class Initialized
DEBUG - 2023-05-21 23:37:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:37:18 --> Input Class Initialized
INFO - 2023-05-21 23:37:18 --> Language Class Initialized
DEBUG - 2023-05-21 23:37:18 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:37:18 --> FIX Method ====> index
INFO - 2023-05-21 23:37:18 --> Loader Class Initialized
INFO - 2023-05-21 23:37:18 --> Helper loaded: url_helper
INFO - 2023-05-21 23:37:18 --> Helper loaded: file_helper
INFO - 2023-05-21 23:37:18 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:37:18 --> Helper loaded: main_helper
INFO - 2023-05-21 23:37:18 --> Database Driver Class Initialized
INFO - 2023-05-21 23:37:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:37:18 --> Email Class Initialized
INFO - 2023-05-21 23:37:18 --> Controller Class Initialized
DEBUG - 2023-05-21 23:37:18 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:37:18 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:37:18 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:37:18 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:37:18 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:37:18 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:37:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:37:18 --> Final output sent to browser
DEBUG - 2023-05-21 23:37:18 --> Total execution time: 0.1181
INFO - 2023-05-21 23:37:18 --> Config Class Initialized
INFO - 2023-05-21 23:37:18 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:37:18 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:37:18 --> Utf8 Class Initialized
INFO - 2023-05-21 23:37:18 --> URI Class Initialized
DEBUG - 2023-05-21 23:37:18 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:37:18 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:37:18 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:37:18 --> Router Class Initialized
INFO - 2023-05-21 23:37:18 --> Output Class Initialized
INFO - 2023-05-21 23:37:18 --> Security Class Initialized
DEBUG - 2023-05-21 23:37:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:37:18 --> Input Class Initialized
INFO - 2023-05-21 23:37:18 --> Language Class Initialized
DEBUG - 2023-05-21 23:37:18 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:37:18 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:37:18 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:37:18 --> Loader Class Initialized
INFO - 2023-05-21 23:37:18 --> Helper loaded: url_helper
INFO - 2023-05-21 23:37:18 --> Helper loaded: file_helper
INFO - 2023-05-21 23:37:18 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:37:18 --> Helper loaded: main_helper
INFO - 2023-05-21 23:37:18 --> Database Driver Class Initialized
INFO - 2023-05-21 23:37:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:37:18 --> Email Class Initialized
INFO - 2023-05-21 23:37:18 --> Controller Class Initialized
DEBUG - 2023-05-21 23:37:18 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:37:18 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:37:18 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:37:18 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:37:18 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:38:07 --> Config Class Initialized
INFO - 2023-05-21 23:38:07 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:07 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:07 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:07 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:07 --> ============ Segments ======> Array
(
    [0] => report
    [1] => booking
)

DEBUG - 2023-05-21 23:38:07 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Report ======> 
DEBUG - 2023-05-21 23:38:07 --> ============ Rewrite SetClass Routing ==========>  class: report
INFO - 2023-05-21 23:38:07 --> Router Class Initialized
INFO - 2023-05-21 23:38:07 --> Output Class Initialized
INFO - 2023-05-21 23:38:07 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:07 --> Input Class Initialized
INFO - 2023-05-21 23:38:07 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:07 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Report.php  ==> Exist: 1
DEBUG - 2023-05-21 23:38:07 --> FIX Method ====> booking
INFO - 2023-05-21 23:38:07 --> Loader Class Initialized
INFO - 2023-05-21 23:38:07 --> Helper loaded: url_helper
INFO - 2023-05-21 23:38:07 --> Helper loaded: file_helper
INFO - 2023-05-21 23:38:07 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:38:07 --> Helper loaded: main_helper
INFO - 2023-05-21 23:38:07 --> Database Driver Class Initialized
INFO - 2023-05-21 23:38:07 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:38:07 --> Email Class Initialized
INFO - 2023-05-21 23:38:07 --> Controller Class Initialized
DEBUG - 2023-05-21 23:38:07 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:38:07 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:07 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:38:07 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:38:15 --> Config Class Initialized
INFO - 2023-05-21 23:38:15 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:15 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:15 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:15 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:15 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:38:15 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:38:15 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:38:15 --> Router Class Initialized
INFO - 2023-05-21 23:38:15 --> Output Class Initialized
INFO - 2023-05-21 23:38:15 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:15 --> Input Class Initialized
INFO - 2023-05-21 23:38:15 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:15 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:38:15 --> FIX Method ====> index
INFO - 2023-05-21 23:38:15 --> Loader Class Initialized
INFO - 2023-05-21 23:38:15 --> Helper loaded: url_helper
INFO - 2023-05-21 23:38:15 --> Helper loaded: file_helper
INFO - 2023-05-21 23:38:15 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:38:15 --> Helper loaded: main_helper
INFO - 2023-05-21 23:38:15 --> Database Driver Class Initialized
INFO - 2023-05-21 23:38:15 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:38:15 --> Email Class Initialized
INFO - 2023-05-21 23:38:15 --> Controller Class Initialized
DEBUG - 2023-05-21 23:38:15 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:38:15 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:15 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:15 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:38:15 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:38:15 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:38:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:38:15 --> Final output sent to browser
DEBUG - 2023-05-21 23:38:15 --> Total execution time: 0.1269
INFO - 2023-05-21 23:38:15 --> Config Class Initialized
INFO - 2023-05-21 23:38:15 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:15 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:15 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:15 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:15 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:38:15 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:38:15 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:38:15 --> Router Class Initialized
INFO - 2023-05-21 23:38:15 --> Output Class Initialized
INFO - 2023-05-21 23:38:15 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:15 --> Input Class Initialized
INFO - 2023-05-21 23:38:15 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:15 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:38:15 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:38:17 --> Config Class Initialized
INFO - 2023-05-21 23:38:17 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:17 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:17 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:17 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:17 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:38:17 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:38:17 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:38:17 --> Router Class Initialized
INFO - 2023-05-21 23:38:17 --> Output Class Initialized
INFO - 2023-05-21 23:38:17 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:17 --> Input Class Initialized
INFO - 2023-05-21 23:38:17 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:17 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:38:17 --> FIX Method ====> index
INFO - 2023-05-21 23:38:17 --> Loader Class Initialized
INFO - 2023-05-21 23:38:17 --> Helper loaded: url_helper
INFO - 2023-05-21 23:38:17 --> Helper loaded: file_helper
INFO - 2023-05-21 23:38:17 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:38:17 --> Helper loaded: main_helper
INFO - 2023-05-21 23:38:17 --> Database Driver Class Initialized
INFO - 2023-05-21 23:38:17 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:38:17 --> Email Class Initialized
INFO - 2023-05-21 23:38:17 --> Controller Class Initialized
DEBUG - 2023-05-21 23:38:17 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:38:17 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:17 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:17 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:38:17 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:38:17 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:38:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:38:17 --> Final output sent to browser
DEBUG - 2023-05-21 23:38:17 --> Total execution time: 0.0692
INFO - 2023-05-21 23:38:17 --> Config Class Initialized
INFO - 2023-05-21 23:38:17 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:17 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:17 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:17 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:17 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:38:17 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:38:17 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:38:17 --> Router Class Initialized
INFO - 2023-05-21 23:38:17 --> Output Class Initialized
INFO - 2023-05-21 23:38:17 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:17 --> Input Class Initialized
INFO - 2023-05-21 23:38:17 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:17 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:38:17 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:38:17 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:38:17 --> Loader Class Initialized
INFO - 2023-05-21 23:38:17 --> Helper loaded: url_helper
INFO - 2023-05-21 23:38:17 --> Helper loaded: file_helper
INFO - 2023-05-21 23:38:17 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:38:17 --> Helper loaded: main_helper
INFO - 2023-05-21 23:38:17 --> Database Driver Class Initialized
INFO - 2023-05-21 23:38:17 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:38:17 --> Email Class Initialized
INFO - 2023-05-21 23:38:17 --> Controller Class Initialized
DEBUG - 2023-05-21 23:38:17 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:38:17 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:17 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:17 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:38:17 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:38:29 --> Config Class Initialized
INFO - 2023-05-21 23:38:29 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:29 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:29 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:29 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:29 --> ============ Segments ======> Array
(
    [0] => permission
)

DEBUG - 2023-05-21 23:38:29 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Permission ======> 
DEBUG - 2023-05-21 23:38:29 --> ============ Rewrite SetClass Routing ==========>  class: permission
INFO - 2023-05-21 23:38:29 --> Router Class Initialized
INFO - 2023-05-21 23:38:29 --> Output Class Initialized
INFO - 2023-05-21 23:38:29 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:29 --> Input Class Initialized
INFO - 2023-05-21 23:38:29 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:29 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Permission.php  ==> Exist: 1
DEBUG - 2023-05-21 23:38:29 --> FIX Method ====> index
INFO - 2023-05-21 23:38:29 --> Loader Class Initialized
INFO - 2023-05-21 23:38:29 --> Helper loaded: url_helper
INFO - 2023-05-21 23:38:29 --> Helper loaded: file_helper
INFO - 2023-05-21 23:38:29 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:38:29 --> Helper loaded: main_helper
INFO - 2023-05-21 23:38:29 --> Database Driver Class Initialized
INFO - 2023-05-21 23:38:29 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:38:29 --> Email Class Initialized
INFO - 2023-05-21 23:38:29 --> Controller Class Initialized
DEBUG - 2023-05-21 23:38:29 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:38:29 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:29 --> === Menu (Current Url) ===Array
(
    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:29 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:38:29 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 1
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_permission.js
INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:38:29 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:38:29 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:38:29 --> Final output sent to browser
DEBUG - 2023-05-21 23:38:29 --> Total execution time: 0.1031
INFO - 2023-05-21 23:38:30 --> Config Class Initialized
INFO - 2023-05-21 23:38:30 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:30 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:30 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:30 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:30 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:38:30 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:38:30 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:38:30 --> Router Class Initialized
INFO - 2023-05-21 23:38:30 --> Output Class Initialized
INFO - 2023-05-21 23:38:30 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:30 --> Input Class Initialized
INFO - 2023-05-21 23:38:30 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:30 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:38:30 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:38:30 --> Config Class Initialized
INFO - 2023-05-21 23:38:30 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:30 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:30 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:30 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:30 --> ============ Segments ======> Array
(
    [0] => permission
)

DEBUG - 2023-05-21 23:38:30 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Permission ======> 
DEBUG - 2023-05-21 23:38:30 --> ============ Rewrite SetClass Routing ==========>  class: permission
INFO - 2023-05-21 23:38:30 --> Router Class Initialized
INFO - 2023-05-21 23:38:30 --> Output Class Initialized
INFO - 2023-05-21 23:38:30 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:30 --> Input Class Initialized
INFO - 2023-05-21 23:38:30 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:30 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Permission.php  ==> Exist: 1
DEBUG - 2023-05-21 23:38:30 --> FIX Method ====> index
INFO - 2023-05-21 23:38:30 --> Loader Class Initialized
INFO - 2023-05-21 23:38:30 --> Helper loaded: url_helper
INFO - 2023-05-21 23:38:30 --> Helper loaded: file_helper
INFO - 2023-05-21 23:38:30 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:38:30 --> Helper loaded: main_helper
INFO - 2023-05-21 23:38:30 --> Database Driver Class Initialized
INFO - 2023-05-21 23:38:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:38:30 --> Email Class Initialized
INFO - 2023-05-21 23:38:30 --> Controller Class Initialized
DEBUG - 2023-05-21 23:38:30 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:38:30 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:30 --> === Menu (Current Url) ===Array
(
    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:30 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:38:30 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 1
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_permission.js
INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:38:30 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:38:30 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:38:30 --> Final output sent to browser
DEBUG - 2023-05-21 23:38:30 --> Total execution time: 0.0794
INFO - 2023-05-21 23:38:31 --> Config Class Initialized
INFO - 2023-05-21 23:38:31 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:31 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:31 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:31 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:31 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => permission
)

DEBUG - 2023-05-21 23:38:31 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:38:31 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:38:31 --> Router Class Initialized
INFO - 2023-05-21 23:38:31 --> Output Class Initialized
INFO - 2023-05-21 23:38:31 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:31 --> Input Class Initialized
INFO - 2023-05-21 23:38:31 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:31 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:38:31 --> FIX Method ====> permission
DEBUG - 2023-05-21 23:38:31 --> ====== MASUK HTTP METHOD ====> permission_get
INFO - 2023-05-21 23:38:31 --> Loader Class Initialized
INFO - 2023-05-21 23:38:31 --> Helper loaded: url_helper
INFO - 2023-05-21 23:38:31 --> Helper loaded: file_helper
INFO - 2023-05-21 23:38:31 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:38:31 --> Helper loaded: main_helper
INFO - 2023-05-21 23:38:31 --> Database Driver Class Initialized
INFO - 2023-05-21 23:38:31 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:38:31 --> Email Class Initialized
INFO - 2023-05-21 23:38:31 --> Controller Class Initialized
DEBUG - 2023-05-21 23:38:31 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:38:31 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:31 --> === Menu (Current Url) ===Array
(
    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:31 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:38:31 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 1
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:38:52 --> Config Class Initialized
INFO - 2023-05-21 23:38:52 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:38:52 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:38:52 --> Utf8 Class Initialized
INFO - 2023-05-21 23:38:52 --> URI Class Initialized
DEBUG - 2023-05-21 23:38:52 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => permission
)

DEBUG - 2023-05-21 23:38:52 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:38:52 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:38:52 --> Router Class Initialized
INFO - 2023-05-21 23:38:52 --> Output Class Initialized
INFO - 2023-05-21 23:38:52 --> Security Class Initialized
DEBUG - 2023-05-21 23:38:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:38:52 --> Input Class Initialized
INFO - 2023-05-21 23:38:52 --> Language Class Initialized
DEBUG - 2023-05-21 23:38:52 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:38:52 --> FIX Method ====> permission
DEBUG - 2023-05-21 23:38:52 --> ====== MASUK HTTP METHOD ====> permission_get
INFO - 2023-05-21 23:38:52 --> Loader Class Initialized
INFO - 2023-05-21 23:38:52 --> Helper loaded: url_helper
INFO - 2023-05-21 23:38:52 --> Helper loaded: file_helper
INFO - 2023-05-21 23:38:52 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:38:52 --> Helper loaded: main_helper
INFO - 2023-05-21 23:38:52 --> Database Driver Class Initialized
INFO - 2023-05-21 23:38:52 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:38:52 --> Email Class Initialized
INFO - 2023-05-21 23:38:52 --> Controller Class Initialized
DEBUG - 2023-05-21 23:38:53 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:38:53 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:53 --> === Menu (Current Url) ===Array
(
    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:38:53 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:38:53 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 1
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:39:06 --> Config Class Initialized
INFO - 2023-05-21 23:39:06 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:39:06 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:39:06 --> Utf8 Class Initialized
INFO - 2023-05-21 23:39:06 --> URI Class Initialized
DEBUG - 2023-05-21 23:39:06 --> ============ Segments ======> Array
(
    [0] => uihelper
    [1] => skrip
)

DEBUG - 2023-05-21 23:39:06 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper ======> 
DEBUG - 2023-05-21 23:39:06 --> ============ Rewrite SetClass Routing ==========>  class: uihelper
INFO - 2023-05-21 23:39:06 --> Router Class Initialized
INFO - 2023-05-21 23:39:06 --> Output Class Initialized
INFO - 2023-05-21 23:39:06 --> Security Class Initialized
DEBUG - 2023-05-21 23:39:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:39:06 --> Input Class Initialized
INFO - 2023-05-21 23:39:06 --> Language Class Initialized
DEBUG - 2023-05-21 23:39:06 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:39:06 --> FIX Method ====> skrip
INFO - 2023-05-21 23:39:06 --> Loader Class Initialized
INFO - 2023-05-21 23:39:06 --> Helper loaded: url_helper
INFO - 2023-05-21 23:39:06 --> Helper loaded: file_helper
INFO - 2023-05-21 23:39:06 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:39:06 --> Helper loaded: main_helper
INFO - 2023-05-21 23:39:06 --> Database Driver Class Initialized
INFO - 2023-05-21 23:39:07 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:39:07 --> Email Class Initialized
INFO - 2023-05-21 23:39:07 --> Controller Class Initialized
DEBUG - 2023-05-21 23:39:07 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:39:07 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:07 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:39:07 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:39:11 --> Config Class Initialized
INFO - 2023-05-21 23:39:11 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:39:11 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:39:11 --> Utf8 Class Initialized
INFO - 2023-05-21 23:39:11 --> URI Class Initialized
DEBUG - 2023-05-21 23:39:11 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => permission
)

DEBUG - 2023-05-21 23:39:11 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:39:11 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:39:11 --> Router Class Initialized
INFO - 2023-05-21 23:39:11 --> Output Class Initialized
INFO - 2023-05-21 23:39:11 --> Security Class Initialized
DEBUG - 2023-05-21 23:39:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:39:11 --> Input Class Initialized
INFO - 2023-05-21 23:39:11 --> Language Class Initialized
DEBUG - 2023-05-21 23:39:11 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:39:11 --> FIX Method ====> permission
DEBUG - 2023-05-21 23:39:11 --> ====== MASUK HTTP METHOD ====> permission_get
INFO - 2023-05-21 23:39:11 --> Loader Class Initialized
INFO - 2023-05-21 23:39:11 --> Helper loaded: url_helper
INFO - 2023-05-21 23:39:11 --> Helper loaded: file_helper
INFO - 2023-05-21 23:39:11 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:39:11 --> Helper loaded: main_helper
INFO - 2023-05-21 23:39:11 --> Database Driver Class Initialized
INFO - 2023-05-21 23:39:11 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:39:11 --> Email Class Initialized
INFO - 2023-05-21 23:39:11 --> Controller Class Initialized
DEBUG - 2023-05-21 23:39:11 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:39:11 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:11 --> === Menu (Current Url) ===Array
(
    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:11 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:39:11 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 1
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:39:12 --> Config Class Initialized
INFO - 2023-05-21 23:39:12 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:39:12 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:39:12 --> Utf8 Class Initialized
INFO - 2023-05-21 23:39:12 --> URI Class Initialized
DEBUG - 2023-05-21 23:39:12 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:39:12 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:39:12 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:39:12 --> Router Class Initialized
INFO - 2023-05-21 23:39:12 --> Output Class Initialized
INFO - 2023-05-21 23:39:12 --> Security Class Initialized
DEBUG - 2023-05-21 23:39:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:39:12 --> Input Class Initialized
INFO - 2023-05-21 23:39:12 --> Language Class Initialized
DEBUG - 2023-05-21 23:39:12 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:39:12 --> FIX Method ====> index
INFO - 2023-05-21 23:39:12 --> Loader Class Initialized
INFO - 2023-05-21 23:39:12 --> Helper loaded: url_helper
INFO - 2023-05-21 23:39:12 --> Helper loaded: file_helper
INFO - 2023-05-21 23:39:12 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:39:12 --> Helper loaded: main_helper
INFO - 2023-05-21 23:39:12 --> Database Driver Class Initialized
INFO - 2023-05-21 23:39:12 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:39:12 --> Email Class Initialized
INFO - 2023-05-21 23:39:12 --> Controller Class Initialized
DEBUG - 2023-05-21 23:39:12 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:39:12 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:12 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:12 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:39:12 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:39:12 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:39:12 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:39:12 --> Final output sent to browser
DEBUG - 2023-05-21 23:39:12 --> Total execution time: 0.1161
INFO - 2023-05-21 23:39:14 --> Config Class Initialized
INFO - 2023-05-21 23:39:14 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:39:14 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:39:14 --> Utf8 Class Initialized
INFO - 2023-05-21 23:39:14 --> URI Class Initialized
DEBUG - 2023-05-21 23:39:14 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:39:14 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:39:14 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:39:14 --> Router Class Initialized
INFO - 2023-05-21 23:39:14 --> Output Class Initialized
INFO - 2023-05-21 23:39:14 --> Security Class Initialized
DEBUG - 2023-05-21 23:39:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:39:14 --> Input Class Initialized
INFO - 2023-05-21 23:39:14 --> Language Class Initialized
DEBUG - 2023-05-21 23:39:14 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:39:14 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:39:18 --> Config Class Initialized
INFO - 2023-05-21 23:39:18 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:39:18 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:39:18 --> Utf8 Class Initialized
INFO - 2023-05-21 23:39:18 --> URI Class Initialized
DEBUG - 2023-05-21 23:39:18 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:39:18 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:39:18 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:39:18 --> Router Class Initialized
INFO - 2023-05-21 23:39:18 --> Output Class Initialized
INFO - 2023-05-21 23:39:18 --> Security Class Initialized
DEBUG - 2023-05-21 23:39:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:39:18 --> Input Class Initialized
INFO - 2023-05-21 23:39:18 --> Language Class Initialized
DEBUG - 2023-05-21 23:39:18 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:39:18 --> FIX Method ====> index
INFO - 2023-05-21 23:39:18 --> Loader Class Initialized
INFO - 2023-05-21 23:39:18 --> Helper loaded: url_helper
INFO - 2023-05-21 23:39:18 --> Helper loaded: file_helper
INFO - 2023-05-21 23:39:18 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:39:18 --> Helper loaded: main_helper
INFO - 2023-05-21 23:39:18 --> Database Driver Class Initialized
INFO - 2023-05-21 23:39:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:39:18 --> Email Class Initialized
INFO - 2023-05-21 23:39:18 --> Controller Class Initialized
DEBUG - 2023-05-21 23:39:18 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:39:18 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:18 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:18 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:39:18 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:39:18 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:39:18 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:39:18 --> Final output sent to browser
DEBUG - 2023-05-21 23:39:18 --> Total execution time: 0.5323
INFO - 2023-05-21 23:39:19 --> Config Class Initialized
INFO - 2023-05-21 23:39:19 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:39:19 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:39:19 --> Utf8 Class Initialized
INFO - 2023-05-21 23:39:19 --> URI Class Initialized
DEBUG - 2023-05-21 23:39:19 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:39:19 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:39:19 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:39:19 --> Router Class Initialized
INFO - 2023-05-21 23:39:19 --> Output Class Initialized
INFO - 2023-05-21 23:39:19 --> Security Class Initialized
DEBUG - 2023-05-21 23:39:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:39:19 --> Input Class Initialized
INFO - 2023-05-21 23:39:19 --> Language Class Initialized
DEBUG - 2023-05-21 23:39:19 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:39:19 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:39:19 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:39:19 --> Loader Class Initialized
INFO - 2023-05-21 23:39:19 --> Helper loaded: url_helper
INFO - 2023-05-21 23:39:19 --> Helper loaded: file_helper
INFO - 2023-05-21 23:39:19 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:39:19 --> Helper loaded: main_helper
INFO - 2023-05-21 23:39:19 --> Database Driver Class Initialized
INFO - 2023-05-21 23:39:19 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:39:19 --> Email Class Initialized
INFO - 2023-05-21 23:39:19 --> Controller Class Initialized
DEBUG - 2023-05-21 23:39:19 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:39:19 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:19 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:19 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:39:19 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:39:22 --> Config Class Initialized
INFO - 2023-05-21 23:39:22 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:39:22 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:39:22 --> Utf8 Class Initialized
INFO - 2023-05-21 23:39:22 --> URI Class Initialized
DEBUG - 2023-05-21 23:39:22 --> ============ Segments ======> Array
(
    [0] => uihelper
    [1] => skrip
)

DEBUG - 2023-05-21 23:39:22 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper ======> 
DEBUG - 2023-05-21 23:39:22 --> ============ Rewrite SetClass Routing ==========>  class: uihelper
INFO - 2023-05-21 23:39:22 --> Router Class Initialized
INFO - 2023-05-21 23:39:22 --> Output Class Initialized
INFO - 2023-05-21 23:39:22 --> Security Class Initialized
DEBUG - 2023-05-21 23:39:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:39:22 --> Input Class Initialized
INFO - 2023-05-21 23:39:22 --> Language Class Initialized
DEBUG - 2023-05-21 23:39:22 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:39:22 --> FIX Method ====> skrip
INFO - 2023-05-21 23:39:22 --> Loader Class Initialized
INFO - 2023-05-21 23:39:22 --> Helper loaded: url_helper
INFO - 2023-05-21 23:39:22 --> Helper loaded: file_helper
INFO - 2023-05-21 23:39:22 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:39:22 --> Helper loaded: main_helper
INFO - 2023-05-21 23:39:23 --> Database Driver Class Initialized
INFO - 2023-05-21 23:39:23 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:39:23 --> Email Class Initialized
INFO - 2023-05-21 23:39:23 --> Controller Class Initialized
DEBUG - 2023-05-21 23:39:23 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:39:23 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:39:23 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:39:23 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:40:35 --> Config Class Initialized
INFO - 2023-05-21 23:40:35 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:40:35 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:40:35 --> Utf8 Class Initialized
INFO - 2023-05-21 23:40:35 --> URI Class Initialized
DEBUG - 2023-05-21 23:40:35 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:40:35 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:40:35 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:40:35 --> Router Class Initialized
INFO - 2023-05-21 23:40:35 --> Output Class Initialized
INFO - 2023-05-21 23:40:35 --> Security Class Initialized
DEBUG - 2023-05-21 23:40:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:40:35 --> Input Class Initialized
INFO - 2023-05-21 23:40:35 --> Language Class Initialized
DEBUG - 2023-05-21 23:40:35 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:40:35 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:40:35 --> ====== MASUK HTTP METHOD ====> navigasi_post
INFO - 2023-05-21 23:40:35 --> Loader Class Initialized
INFO - 2023-05-21 23:40:35 --> Helper loaded: url_helper
INFO - 2023-05-21 23:40:35 --> Helper loaded: file_helper
INFO - 2023-05-21 23:40:35 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:40:35 --> Helper loaded: main_helper
INFO - 2023-05-21 23:40:35 --> Database Driver Class Initialized
INFO - 2023-05-21 23:40:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:40:35 --> Email Class Initialized
INFO - 2023-05-21 23:40:35 --> Controller Class Initialized
DEBUG - 2023-05-21 23:40:35 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:40:35 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:40:35 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:40:35 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:40:35 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

DEBUG - 2023-05-21 23:40:35 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/forms.php
INFO - 2023-05-21 23:42:46 --> Config Class Initialized
INFO - 2023-05-21 23:42:46 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:42:46 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:42:46 --> Utf8 Class Initialized
INFO - 2023-05-21 23:42:46 --> URI Class Initialized
DEBUG - 2023-05-21 23:42:46 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:42:46 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:42:46 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:42:46 --> Router Class Initialized
INFO - 2023-05-21 23:42:46 --> Output Class Initialized
INFO - 2023-05-21 23:42:46 --> Security Class Initialized
DEBUG - 2023-05-21 23:42:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:42:46 --> Input Class Initialized
INFO - 2023-05-21 23:42:46 --> Language Class Initialized
DEBUG - 2023-05-21 23:42:46 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:42:46 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:42:46 --> ====== MASUK HTTP METHOD ====> navigasi_post
INFO - 2023-05-21 23:42:46 --> Loader Class Initialized
INFO - 2023-05-21 23:42:46 --> Helper loaded: url_helper
INFO - 2023-05-21 23:42:46 --> Helper loaded: file_helper
INFO - 2023-05-21 23:42:46 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:42:46 --> Helper loaded: main_helper
INFO - 2023-05-21 23:42:46 --> Database Driver Class Initialized
INFO - 2023-05-21 23:42:46 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:42:46 --> Email Class Initialized
INFO - 2023-05-21 23:42:46 --> Controller Class Initialized
DEBUG - 2023-05-21 23:42:46 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:42:46 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:42:46 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:42:46 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:42:46 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

DEBUG - 2023-05-21 23:42:46 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/forms.php
ERROR - 2023-05-21 23:42:46 --> Severity: Warning --> Undefined array key "id" /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/helpers/formloader_helper.php 22
INFO - 2023-05-21 23:48:53 --> Config Class Initialized
INFO - 2023-05-21 23:48:53 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:48:53 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:48:53 --> Utf8 Class Initialized
INFO - 2023-05-21 23:48:53 --> URI Class Initialized
DEBUG - 2023-05-21 23:48:53 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:48:53 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:48:53 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:48:53 --> Router Class Initialized
INFO - 2023-05-21 23:48:53 --> Output Class Initialized
INFO - 2023-05-21 23:48:53 --> Security Class Initialized
DEBUG - 2023-05-21 23:48:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:48:53 --> Input Class Initialized
INFO - 2023-05-21 23:48:53 --> Language Class Initialized
DEBUG - 2023-05-21 23:48:53 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:48:53 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:48:53 --> ====== MASUK HTTP METHOD ====> navigasi_post
INFO - 2023-05-21 23:48:53 --> Loader Class Initialized
INFO - 2023-05-21 23:48:53 --> Helper loaded: url_helper
INFO - 2023-05-21 23:48:53 --> Helper loaded: file_helper
INFO - 2023-05-21 23:48:53 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:48:53 --> Helper loaded: main_helper
INFO - 2023-05-21 23:48:53 --> Database Driver Class Initialized
INFO - 2023-05-21 23:48:53 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:48:53 --> Email Class Initialized
INFO - 2023-05-21 23:48:53 --> Controller Class Initialized
DEBUG - 2023-05-21 23:48:53 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:48:53 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:48:53 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:48:53 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:48:53 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

DEBUG - 2023-05-21 23:48:53 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/forms.php
ERROR - 2023-05-21 23:48:53 --> Severity: Warning --> Undefined array key "aktif" /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/helpers/formloader_helper.php 22
INFO - 2023-05-21 23:49:30 --> Config Class Initialized
INFO - 2023-05-21 23:49:30 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:49:30 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:49:30 --> Utf8 Class Initialized
INFO - 2023-05-21 23:49:30 --> URI Class Initialized
DEBUG - 2023-05-21 23:49:30 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:49:30 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:49:30 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:49:30 --> Router Class Initialized
INFO - 2023-05-21 23:49:30 --> Output Class Initialized
INFO - 2023-05-21 23:49:30 --> Security Class Initialized
DEBUG - 2023-05-21 23:49:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:49:30 --> Input Class Initialized
INFO - 2023-05-21 23:49:30 --> Language Class Initialized
DEBUG - 2023-05-21 23:49:30 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:49:30 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:49:30 --> ====== MASUK HTTP METHOD ====> navigasi_post
INFO - 2023-05-21 23:49:30 --> Loader Class Initialized
INFO - 2023-05-21 23:49:30 --> Helper loaded: url_helper
INFO - 2023-05-21 23:49:30 --> Helper loaded: file_helper
INFO - 2023-05-21 23:49:30 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:49:30 --> Helper loaded: main_helper
INFO - 2023-05-21 23:49:30 --> Database Driver Class Initialized
INFO - 2023-05-21 23:49:30 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:49:30 --> Email Class Initialized
INFO - 2023-05-21 23:49:30 --> Controller Class Initialized
DEBUG - 2023-05-21 23:49:30 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:49:30 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:30 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:30 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:49:30 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

DEBUG - 2023-05-21 23:49:30 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/forms.php
DEBUG - 2023-05-21 23:49:30 --> -====== INPUT NAVIGASI ===== Array
(
    [0] => Array
        (
            [menu] => T3I3nsuU
        )

    [1] => Array
        (
            [nama] => tes
            [lvl] => 1
            [parrent_element] => sidebar
            [icon] => 
            [url] => mpdn/
            [id] => T3I3nsuU
            [aktif] => 1
        )

    [2] => 
)

INFO - 2023-05-21 23:49:32 --> Config Class Initialized
INFO - 2023-05-21 23:49:32 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:49:32 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:49:32 --> Utf8 Class Initialized
INFO - 2023-05-21 23:49:32 --> URI Class Initialized
DEBUG - 2023-05-21 23:49:32 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:49:32 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:49:32 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:49:32 --> Router Class Initialized
INFO - 2023-05-21 23:49:32 --> Output Class Initialized
INFO - 2023-05-21 23:49:32 --> Security Class Initialized
DEBUG - 2023-05-21 23:49:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:49:32 --> Input Class Initialized
INFO - 2023-05-21 23:49:32 --> Language Class Initialized
DEBUG - 2023-05-21 23:49:32 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:49:33 --> FIX Method ====> index
INFO - 2023-05-21 23:49:33 --> Loader Class Initialized
INFO - 2023-05-21 23:49:33 --> Helper loaded: url_helper
INFO - 2023-05-21 23:49:33 --> Helper loaded: file_helper
INFO - 2023-05-21 23:49:33 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:49:33 --> Helper loaded: main_helper
INFO - 2023-05-21 23:49:33 --> Database Driver Class Initialized
INFO - 2023-05-21 23:49:33 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:49:33 --> Email Class Initialized
INFO - 2023-05-21 23:49:33 --> Controller Class Initialized
DEBUG - 2023-05-21 23:49:33 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:49:33 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:33 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:33 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:49:33 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:49:33 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:49:33 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:49:33 --> Final output sent to browser
DEBUG - 2023-05-21 23:49:33 --> Total execution time: 0.1331
INFO - 2023-05-21 23:49:34 --> Config Class Initialized
INFO - 2023-05-21 23:49:34 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:49:34 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:49:34 --> Utf8 Class Initialized
INFO - 2023-05-21 23:49:34 --> URI Class Initialized
DEBUG - 2023-05-21 23:49:34 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:49:34 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:49:34 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:49:34 --> Router Class Initialized
INFO - 2023-05-21 23:49:34 --> Output Class Initialized
INFO - 2023-05-21 23:49:34 --> Security Class Initialized
DEBUG - 2023-05-21 23:49:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:49:34 --> Input Class Initialized
INFO - 2023-05-21 23:49:34 --> Language Class Initialized
DEBUG - 2023-05-21 23:49:34 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:49:34 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:49:35 --> Config Class Initialized
INFO - 2023-05-21 23:49:35 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:49:35 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:49:35 --> Utf8 Class Initialized
INFO - 2023-05-21 23:49:35 --> URI Class Initialized
DEBUG - 2023-05-21 23:49:35 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:49:35 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:49:35 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:49:35 --> Router Class Initialized
INFO - 2023-05-21 23:49:35 --> Output Class Initialized
INFO - 2023-05-21 23:49:35 --> Security Class Initialized
DEBUG - 2023-05-21 23:49:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:49:35 --> Input Class Initialized
INFO - 2023-05-21 23:49:35 --> Language Class Initialized
DEBUG - 2023-05-21 23:49:35 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:49:35 --> FIX Method ====> index
INFO - 2023-05-21 23:49:35 --> Loader Class Initialized
INFO - 2023-05-21 23:49:35 --> Helper loaded: url_helper
INFO - 2023-05-21 23:49:35 --> Helper loaded: file_helper
INFO - 2023-05-21 23:49:35 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:49:35 --> Helper loaded: main_helper
INFO - 2023-05-21 23:49:35 --> Database Driver Class Initialized
INFO - 2023-05-21 23:49:35 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:49:35 --> Email Class Initialized
INFO - 2023-05-21 23:49:35 --> Controller Class Initialized
DEBUG - 2023-05-21 23:49:35 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:49:35 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:35 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:35 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:49:35 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:49:35 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:49:35 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:49:35 --> Final output sent to browser
DEBUG - 2023-05-21 23:49:35 --> Total execution time: 0.0757
INFO - 2023-05-21 23:49:36 --> Config Class Initialized
INFO - 2023-05-21 23:49:36 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:49:36 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:49:36 --> Utf8 Class Initialized
INFO - 2023-05-21 23:49:36 --> URI Class Initialized
DEBUG - 2023-05-21 23:49:36 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:49:36 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:49:36 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:49:36 --> Router Class Initialized
INFO - 2023-05-21 23:49:36 --> Output Class Initialized
INFO - 2023-05-21 23:49:36 --> Security Class Initialized
DEBUG - 2023-05-21 23:49:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:49:36 --> Input Class Initialized
INFO - 2023-05-21 23:49:36 --> Language Class Initialized
DEBUG - 2023-05-21 23:49:36 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:49:36 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:49:36 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:49:36 --> Loader Class Initialized
INFO - 2023-05-21 23:49:36 --> Helper loaded: url_helper
INFO - 2023-05-21 23:49:36 --> Helper loaded: file_helper
INFO - 2023-05-21 23:49:36 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:49:36 --> Helper loaded: main_helper
INFO - 2023-05-21 23:49:36 --> Database Driver Class Initialized
INFO - 2023-05-21 23:49:36 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:49:36 --> Email Class Initialized
INFO - 2023-05-21 23:49:36 --> Controller Class Initialized
DEBUG - 2023-05-21 23:49:36 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:49:36 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:36 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:36 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:49:36 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:49:44 --> Config Class Initialized
INFO - 2023-05-21 23:49:44 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:49:44 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:49:44 --> Utf8 Class Initialized
INFO - 2023-05-21 23:49:44 --> URI Class Initialized
DEBUG - 2023-05-21 23:49:44 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:49:44 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:49:44 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:49:44 --> Router Class Initialized
INFO - 2023-05-21 23:49:44 --> Output Class Initialized
INFO - 2023-05-21 23:49:44 --> Security Class Initialized
DEBUG - 2023-05-21 23:49:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:49:44 --> Input Class Initialized
INFO - 2023-05-21 23:49:44 --> Language Class Initialized
DEBUG - 2023-05-21 23:49:44 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:49:44 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:49:44 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:49:44 --> Loader Class Initialized
INFO - 2023-05-21 23:49:44 --> Helper loaded: url_helper
INFO - 2023-05-21 23:49:44 --> Helper loaded: file_helper
INFO - 2023-05-21 23:49:44 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:49:44 --> Helper loaded: main_helper
INFO - 2023-05-21 23:49:44 --> Database Driver Class Initialized
INFO - 2023-05-21 23:49:44 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:49:44 --> Email Class Initialized
INFO - 2023-05-21 23:49:44 --> Controller Class Initialized
DEBUG - 2023-05-21 23:49:44 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:49:44 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:44 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:44 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:49:44 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:49:47 --> Config Class Initialized
INFO - 2023-05-21 23:49:47 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:49:47 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:49:47 --> Utf8 Class Initialized
INFO - 2023-05-21 23:49:47 --> URI Class Initialized
DEBUG - 2023-05-21 23:49:47 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:49:47 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:49:47 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:49:47 --> Router Class Initialized
INFO - 2023-05-21 23:49:47 --> Output Class Initialized
INFO - 2023-05-21 23:49:47 --> Security Class Initialized
DEBUG - 2023-05-21 23:49:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:49:47 --> Input Class Initialized
INFO - 2023-05-21 23:49:47 --> Language Class Initialized
DEBUG - 2023-05-21 23:49:47 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:49:47 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:49:47 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:49:47 --> Loader Class Initialized
INFO - 2023-05-21 23:49:47 --> Helper loaded: url_helper
INFO - 2023-05-21 23:49:47 --> Helper loaded: file_helper
INFO - 2023-05-21 23:49:47 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:49:47 --> Helper loaded: main_helper
INFO - 2023-05-21 23:49:47 --> Database Driver Class Initialized
INFO - 2023-05-21 23:49:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:49:47 --> Email Class Initialized
INFO - 2023-05-21 23:49:47 --> Controller Class Initialized
DEBUG - 2023-05-21 23:49:47 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:49:47 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:47 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:47 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:49:47 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:49:57 --> Config Class Initialized
INFO - 2023-05-21 23:49:57 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:49:57 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:49:57 --> Utf8 Class Initialized
INFO - 2023-05-21 23:49:57 --> URI Class Initialized
DEBUG - 2023-05-21 23:49:57 --> ============ Segments ======> Array
(
    [0] => uihelper
    [1] => skrip
)

DEBUG - 2023-05-21 23:49:57 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper ======> 
DEBUG - 2023-05-21 23:49:57 --> ============ Rewrite SetClass Routing ==========>  class: uihelper
INFO - 2023-05-21 23:49:57 --> Router Class Initialized
INFO - 2023-05-21 23:49:57 --> Output Class Initialized
INFO - 2023-05-21 23:49:57 --> Security Class Initialized
DEBUG - 2023-05-21 23:49:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:49:57 --> Input Class Initialized
INFO - 2023-05-21 23:49:57 --> Language Class Initialized
DEBUG - 2023-05-21 23:49:57 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:49:57 --> FIX Method ====> skrip
INFO - 2023-05-21 23:49:57 --> Loader Class Initialized
INFO - 2023-05-21 23:49:57 --> Helper loaded: url_helper
INFO - 2023-05-21 23:49:57 --> Helper loaded: file_helper
INFO - 2023-05-21 23:49:57 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:49:57 --> Helper loaded: main_helper
INFO - 2023-05-21 23:49:57 --> Database Driver Class Initialized
INFO - 2023-05-21 23:49:57 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:49:57 --> Email Class Initialized
INFO - 2023-05-21 23:49:57 --> Controller Class Initialized
DEBUG - 2023-05-21 23:49:57 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:49:57 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:49:57 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:49:57 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:50:14 --> Config Class Initialized
INFO - 2023-05-21 23:50:14 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:50:14 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:50:14 --> Utf8 Class Initialized
INFO - 2023-05-21 23:50:14 --> URI Class Initialized
DEBUG - 2023-05-21 23:50:14 --> ============ Segments ======> Array
(
    [0] => uihelper
    [1] => skrip
)

DEBUG - 2023-05-21 23:50:14 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper ======> 
DEBUG - 2023-05-21 23:50:14 --> ============ Rewrite SetClass Routing ==========>  class: uihelper
INFO - 2023-05-21 23:50:14 --> Router Class Initialized
INFO - 2023-05-21 23:50:14 --> Output Class Initialized
INFO - 2023-05-21 23:50:14 --> Security Class Initialized
DEBUG - 2023-05-21 23:50:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:50:14 --> Input Class Initialized
INFO - 2023-05-21 23:50:14 --> Language Class Initialized
DEBUG - 2023-05-21 23:50:14 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:50:14 --> FIX Method ====> skrip
INFO - 2023-05-21 23:50:14 --> Loader Class Initialized
INFO - 2023-05-21 23:50:14 --> Helper loaded: url_helper
INFO - 2023-05-21 23:50:14 --> Helper loaded: file_helper
INFO - 2023-05-21 23:50:14 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:50:14 --> Helper loaded: main_helper
INFO - 2023-05-21 23:50:14 --> Database Driver Class Initialized
INFO - 2023-05-21 23:50:14 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:50:14 --> Email Class Initialized
INFO - 2023-05-21 23:50:14 --> Controller Class Initialized
DEBUG - 2023-05-21 23:50:14 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:50:14 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:50:14 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:50:14 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:51:15 --> Config Class Initialized
INFO - 2023-05-21 23:51:15 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:51:15 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:51:15 --> Utf8 Class Initialized
INFO - 2023-05-21 23:51:15 --> URI Class Initialized
DEBUG - 2023-05-21 23:51:15 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:51:15 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:51:15 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:51:15 --> Router Class Initialized
INFO - 2023-05-21 23:51:15 --> Output Class Initialized
INFO - 2023-05-21 23:51:15 --> Security Class Initialized
DEBUG - 2023-05-21 23:51:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:51:15 --> Input Class Initialized
INFO - 2023-05-21 23:51:15 --> Language Class Initialized
DEBUG - 2023-05-21 23:51:15 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:51:15 --> FIX Method ====> index
INFO - 2023-05-21 23:51:15 --> Loader Class Initialized
INFO - 2023-05-21 23:51:15 --> Helper loaded: url_helper
INFO - 2023-05-21 23:51:15 --> Helper loaded: file_helper
INFO - 2023-05-21 23:51:15 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:51:15 --> Helper loaded: main_helper
INFO - 2023-05-21 23:51:15 --> Database Driver Class Initialized
INFO - 2023-05-21 23:51:15 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:51:15 --> Email Class Initialized
INFO - 2023-05-21 23:51:15 --> Controller Class Initialized
DEBUG - 2023-05-21 23:51:15 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:51:15 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:51:15 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:51:15 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:51:15 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:51:15 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:51:15 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:51:15 --> Final output sent to browser
DEBUG - 2023-05-21 23:51:15 --> Total execution time: 0.1461
INFO - 2023-05-21 23:51:16 --> Config Class Initialized
INFO - 2023-05-21 23:51:16 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:51:16 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:51:16 --> Utf8 Class Initialized
INFO - 2023-05-21 23:51:16 --> URI Class Initialized
DEBUG - 2023-05-21 23:51:16 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:51:16 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:51:16 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:51:16 --> Router Class Initialized
INFO - 2023-05-21 23:51:16 --> Output Class Initialized
INFO - 2023-05-21 23:51:16 --> Security Class Initialized
DEBUG - 2023-05-21 23:51:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:51:16 --> Input Class Initialized
INFO - 2023-05-21 23:51:16 --> Language Class Initialized
DEBUG - 2023-05-21 23:51:16 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:51:16 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:51:17 --> Config Class Initialized
INFO - 2023-05-21 23:51:17 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:51:17 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:51:17 --> Utf8 Class Initialized
INFO - 2023-05-21 23:51:17 --> URI Class Initialized
DEBUG - 2023-05-21 23:51:17 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:51:17 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:51:17 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:51:17 --> Router Class Initialized
INFO - 2023-05-21 23:51:17 --> Output Class Initialized
INFO - 2023-05-21 23:51:17 --> Security Class Initialized
DEBUG - 2023-05-21 23:51:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:51:17 --> Input Class Initialized
INFO - 2023-05-21 23:51:17 --> Language Class Initialized
DEBUG - 2023-05-21 23:51:17 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:51:17 --> FIX Method ====> index
INFO - 2023-05-21 23:51:17 --> Loader Class Initialized
INFO - 2023-05-21 23:51:17 --> Helper loaded: url_helper
INFO - 2023-05-21 23:51:17 --> Helper loaded: file_helper
INFO - 2023-05-21 23:51:17 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:51:17 --> Helper loaded: main_helper
INFO - 2023-05-21 23:51:17 --> Database Driver Class Initialized
INFO - 2023-05-21 23:51:17 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:51:17 --> Email Class Initialized
INFO - 2023-05-21 23:51:17 --> Controller Class Initialized
DEBUG - 2023-05-21 23:51:17 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:51:17 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:51:17 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:51:17 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:51:17 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:51:17 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:51:17 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:51:17 --> Final output sent to browser
DEBUG - 2023-05-21 23:51:17 --> Total execution time: 0.0748
INFO - 2023-05-21 23:51:18 --> Config Class Initialized
INFO - 2023-05-21 23:51:18 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:51:18 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:51:18 --> Utf8 Class Initialized
INFO - 2023-05-21 23:51:18 --> URI Class Initialized
DEBUG - 2023-05-21 23:51:18 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:51:18 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:51:18 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:51:18 --> Router Class Initialized
INFO - 2023-05-21 23:51:18 --> Output Class Initialized
INFO - 2023-05-21 23:51:18 --> Security Class Initialized
DEBUG - 2023-05-21 23:51:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:51:18 --> Input Class Initialized
INFO - 2023-05-21 23:51:18 --> Language Class Initialized
DEBUG - 2023-05-21 23:51:18 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:51:18 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:51:18 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:51:18 --> Loader Class Initialized
INFO - 2023-05-21 23:51:18 --> Helper loaded: url_helper
INFO - 2023-05-21 23:51:18 --> Helper loaded: file_helper
INFO - 2023-05-21 23:51:18 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:51:18 --> Helper loaded: main_helper
INFO - 2023-05-21 23:51:18 --> Database Driver Class Initialized
INFO - 2023-05-21 23:51:18 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:51:18 --> Email Class Initialized
INFO - 2023-05-21 23:51:18 --> Controller Class Initialized
DEBUG - 2023-05-21 23:51:18 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:51:18 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:51:18 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:51:18 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:51:18 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:51:25 --> Config Class Initialized
INFO - 2023-05-21 23:51:25 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:51:25 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:51:25 --> Utf8 Class Initialized
INFO - 2023-05-21 23:51:25 --> URI Class Initialized
DEBUG - 2023-05-21 23:51:25 --> ============ Segments ======> Array
(
    [0] => uihelper
    [1] => skrip
)

DEBUG - 2023-05-21 23:51:25 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper ======> 
DEBUG - 2023-05-21 23:51:25 --> ============ Rewrite SetClass Routing ==========>  class: uihelper
INFO - 2023-05-21 23:51:25 --> Router Class Initialized
INFO - 2023-05-21 23:51:25 --> Output Class Initialized
INFO - 2023-05-21 23:51:25 --> Security Class Initialized
DEBUG - 2023-05-21 23:51:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:51:25 --> Input Class Initialized
INFO - 2023-05-21 23:51:25 --> Language Class Initialized
DEBUG - 2023-05-21 23:51:25 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:51:25 --> FIX Method ====> skrip
INFO - 2023-05-21 23:51:25 --> Loader Class Initialized
INFO - 2023-05-21 23:51:25 --> Helper loaded: url_helper
INFO - 2023-05-21 23:51:25 --> Helper loaded: file_helper
INFO - 2023-05-21 23:51:25 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:51:25 --> Helper loaded: main_helper
INFO - 2023-05-21 23:51:25 --> Database Driver Class Initialized
INFO - 2023-05-21 23:51:25 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:51:25 --> Email Class Initialized
INFO - 2023-05-21 23:51:25 --> Controller Class Initialized
DEBUG - 2023-05-21 23:51:25 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:51:25 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:51:25 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:51:25 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:53:10 --> Config Class Initialized
INFO - 2023-05-21 23:53:10 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:53:10 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:53:10 --> Utf8 Class Initialized
INFO - 2023-05-21 23:53:10 --> URI Class Initialized
DEBUG - 2023-05-21 23:53:10 --> ============ Segments ======> Array
(
    [0] => uihelper
    [1] => skrip
)

DEBUG - 2023-05-21 23:53:10 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper ======> 
DEBUG - 2023-05-21 23:53:10 --> ============ Rewrite SetClass Routing ==========>  class: uihelper
INFO - 2023-05-21 23:53:10 --> Router Class Initialized
INFO - 2023-05-21 23:53:10 --> Output Class Initialized
INFO - 2023-05-21 23:53:10 --> Security Class Initialized
DEBUG - 2023-05-21 23:53:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:53:10 --> Input Class Initialized
INFO - 2023-05-21 23:53:10 --> Language Class Initialized
DEBUG - 2023-05-21 23:53:10 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:53:10 --> FIX Method ====> skrip
INFO - 2023-05-21 23:53:10 --> Loader Class Initialized
INFO - 2023-05-21 23:53:10 --> Helper loaded: url_helper
INFO - 2023-05-21 23:53:10 --> Helper loaded: file_helper
INFO - 2023-05-21 23:53:10 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:53:10 --> Helper loaded: main_helper
INFO - 2023-05-21 23:53:10 --> Database Driver Class Initialized
INFO - 2023-05-21 23:53:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:53:10 --> Email Class Initialized
INFO - 2023-05-21 23:53:10 --> Controller Class Initialized
DEBUG - 2023-05-21 23:53:10 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:53:10 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:53:10 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:53:10 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:53:47 --> Config Class Initialized
INFO - 2023-05-21 23:53:47 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:53:47 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:53:47 --> Utf8 Class Initialized
INFO - 2023-05-21 23:53:47 --> URI Class Initialized
DEBUG - 2023-05-21 23:53:47 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:53:47 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:53:47 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:53:47 --> Router Class Initialized
INFO - 2023-05-21 23:53:47 --> Output Class Initialized
INFO - 2023-05-21 23:53:47 --> Security Class Initialized
DEBUG - 2023-05-21 23:53:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:53:47 --> Input Class Initialized
INFO - 2023-05-21 23:53:47 --> Language Class Initialized
DEBUG - 2023-05-21 23:53:47 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:53:47 --> FIX Method ====> index
INFO - 2023-05-21 23:53:47 --> Loader Class Initialized
INFO - 2023-05-21 23:53:47 --> Helper loaded: url_helper
INFO - 2023-05-21 23:53:47 --> Helper loaded: file_helper
INFO - 2023-05-21 23:53:47 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:53:47 --> Helper loaded: main_helper
INFO - 2023-05-21 23:53:47 --> Database Driver Class Initialized
INFO - 2023-05-21 23:53:47 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:53:47 --> Email Class Initialized
INFO - 2023-05-21 23:53:47 --> Controller Class Initialized
DEBUG - 2023-05-21 23:53:47 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:53:47 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:53:47 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:53:47 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:54:55 --> Config Class Initialized
INFO - 2023-05-21 23:54:55 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:54:55 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:54:55 --> Utf8 Class Initialized
INFO - 2023-05-21 23:54:55 --> URI Class Initialized
DEBUG - 2023-05-21 23:54:55 --> ============ Segments ======> Array
(
    [0] => uihelper
    [1] => skrip
)

DEBUG - 2023-05-21 23:54:55 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper ======> 
DEBUG - 2023-05-21 23:54:55 --> ============ Rewrite SetClass Routing ==========>  class: uihelper
INFO - 2023-05-21 23:54:55 --> Router Class Initialized
INFO - 2023-05-21 23:54:55 --> Output Class Initialized
INFO - 2023-05-21 23:54:55 --> Security Class Initialized
DEBUG - 2023-05-21 23:54:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:54:55 --> Input Class Initialized
INFO - 2023-05-21 23:54:55 --> Language Class Initialized
DEBUG - 2023-05-21 23:54:55 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:54:55 --> FIX Method ====> skrip
INFO - 2023-05-21 23:54:55 --> Loader Class Initialized
INFO - 2023-05-21 23:54:55 --> Helper loaded: url_helper
INFO - 2023-05-21 23:54:55 --> Helper loaded: file_helper
INFO - 2023-05-21 23:54:55 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:54:56 --> Helper loaded: main_helper
INFO - 2023-05-21 23:54:56 --> Database Driver Class Initialized
INFO - 2023-05-21 23:54:56 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:54:56 --> Email Class Initialized
INFO - 2023-05-21 23:54:56 --> Controller Class Initialized
DEBUG - 2023-05-21 23:54:56 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:54:56 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:54:56 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:54:56 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:55:25 --> Config Class Initialized
INFO - 2023-05-21 23:55:25 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:55:25 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:55:25 --> Utf8 Class Initialized
INFO - 2023-05-21 23:55:25 --> URI Class Initialized
DEBUG - 2023-05-21 23:55:25 --> ============ Segments ======> Array
(
    [0] => uihelper
    [1] => skrip
)

DEBUG - 2023-05-21 23:55:25 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper ======> 
DEBUG - 2023-05-21 23:55:25 --> ============ Rewrite SetClass Routing ==========>  class: uihelper
INFO - 2023-05-21 23:55:25 --> Router Class Initialized
INFO - 2023-05-21 23:55:25 --> Output Class Initialized
INFO - 2023-05-21 23:55:25 --> Security Class Initialized
DEBUG - 2023-05-21 23:55:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:55:25 --> Input Class Initialized
INFO - 2023-05-21 23:55:25 --> Language Class Initialized
DEBUG - 2023-05-21 23:55:25 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:55:25 --> FIX Method ====> skrip
INFO - 2023-05-21 23:55:25 --> Loader Class Initialized
INFO - 2023-05-21 23:55:25 --> Helper loaded: url_helper
INFO - 2023-05-21 23:55:25 --> Helper loaded: file_helper
INFO - 2023-05-21 23:55:25 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:55:25 --> Helper loaded: main_helper
INFO - 2023-05-21 23:55:25 --> Database Driver Class Initialized
INFO - 2023-05-21 23:55:25 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:55:25 --> Email Class Initialized
INFO - 2023-05-21 23:55:25 --> Controller Class Initialized
DEBUG - 2023-05-21 23:55:25 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:55:25 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:55:25 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:55:25 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:58:51 --> Config Class Initialized
INFO - 2023-05-21 23:58:51 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:58:51 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:58:51 --> Utf8 Class Initialized
INFO - 2023-05-21 23:58:51 --> URI Class Initialized
DEBUG - 2023-05-21 23:58:51 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:58:51 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:58:51 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:58:51 --> Router Class Initialized
INFO - 2023-05-21 23:58:51 --> Output Class Initialized
INFO - 2023-05-21 23:58:51 --> Security Class Initialized
DEBUG - 2023-05-21 23:58:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:58:51 --> Input Class Initialized
INFO - 2023-05-21 23:58:51 --> Language Class Initialized
DEBUG - 2023-05-21 23:58:51 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:58:51 --> FIX Method ====> index
INFO - 2023-05-21 23:58:51 --> Loader Class Initialized
INFO - 2023-05-21 23:58:51 --> Helper loaded: url_helper
INFO - 2023-05-21 23:58:51 --> Helper loaded: file_helper
INFO - 2023-05-21 23:58:51 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:58:51 --> Helper loaded: main_helper
INFO - 2023-05-21 23:58:51 --> Database Driver Class Initialized
INFO - 2023-05-21 23:58:51 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:58:51 --> Email Class Initialized
INFO - 2023-05-21 23:58:51 --> Controller Class Initialized
DEBUG - 2023-05-21 23:58:51 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:58:51 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:58:51 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:58:51 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:59:10 --> Config Class Initialized
INFO - 2023-05-21 23:59:10 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:59:10 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:59:10 --> Utf8 Class Initialized
INFO - 2023-05-21 23:59:10 --> URI Class Initialized
DEBUG - 2023-05-21 23:59:10 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:59:10 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:59:10 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:59:10 --> Router Class Initialized
INFO - 2023-05-21 23:59:10 --> Output Class Initialized
INFO - 2023-05-21 23:59:10 --> Security Class Initialized
DEBUG - 2023-05-21 23:59:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:59:10 --> Input Class Initialized
INFO - 2023-05-21 23:59:10 --> Language Class Initialized
DEBUG - 2023-05-21 23:59:10 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:59:10 --> FIX Method ====> index
INFO - 2023-05-21 23:59:10 --> Loader Class Initialized
INFO - 2023-05-21 23:59:10 --> Helper loaded: url_helper
INFO - 2023-05-21 23:59:10 --> Helper loaded: file_helper
INFO - 2023-05-21 23:59:10 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:59:10 --> Helper loaded: main_helper
INFO - 2023-05-21 23:59:10 --> Database Driver Class Initialized
INFO - 2023-05-21 23:59:10 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:59:10 --> Email Class Initialized
INFO - 2023-05-21 23:59:10 --> Controller Class Initialized
DEBUG - 2023-05-21 23:59:10 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:59:10 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:10 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:10 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:59:10 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:59:10 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:59:10 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:59:10 --> Final output sent to browser
DEBUG - 2023-05-21 23:59:10 --> Total execution time: 0.2269
INFO - 2023-05-21 23:59:11 --> Config Class Initialized
INFO - 2023-05-21 23:59:11 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:59:11 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:59:11 --> Utf8 Class Initialized
INFO - 2023-05-21 23:59:11 --> URI Class Initialized
DEBUG - 2023-05-21 23:59:11 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:59:11 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:59:11 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:59:11 --> Router Class Initialized
INFO - 2023-05-21 23:59:11 --> Output Class Initialized
INFO - 2023-05-21 23:59:11 --> Security Class Initialized
DEBUG - 2023-05-21 23:59:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:59:11 --> Input Class Initialized
INFO - 2023-05-21 23:59:11 --> Language Class Initialized
DEBUG - 2023-05-21 23:59:11 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:59:11 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:59:13 --> Config Class Initialized
INFO - 2023-05-21 23:59:13 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:59:13 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:59:13 --> Utf8 Class Initialized
INFO - 2023-05-21 23:59:13 --> URI Class Initialized
DEBUG - 2023-05-21 23:59:13 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:59:13 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:59:13 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:59:13 --> Router Class Initialized
INFO - 2023-05-21 23:59:13 --> Output Class Initialized
INFO - 2023-05-21 23:59:13 --> Security Class Initialized
DEBUG - 2023-05-21 23:59:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:59:13 --> Input Class Initialized
INFO - 2023-05-21 23:59:13 --> Language Class Initialized
DEBUG - 2023-05-21 23:59:13 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:59:13 --> FIX Method ====> index
INFO - 2023-05-21 23:59:13 --> Loader Class Initialized
INFO - 2023-05-21 23:59:13 --> Helper loaded: url_helper
INFO - 2023-05-21 23:59:13 --> Helper loaded: file_helper
INFO - 2023-05-21 23:59:13 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:59:13 --> Helper loaded: main_helper
INFO - 2023-05-21 23:59:13 --> Database Driver Class Initialized
INFO - 2023-05-21 23:59:13 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:59:13 --> Email Class Initialized
INFO - 2023-05-21 23:59:13 --> Controller Class Initialized
DEBUG - 2023-05-21 23:59:13 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:59:13 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:13 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:13 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:59:13 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:59:13 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:59:13 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:59:13 --> Final output sent to browser
DEBUG - 2023-05-21 23:59:13 --> Total execution time: 0.1364
INFO - 2023-05-21 23:59:13 --> Config Class Initialized
INFO - 2023-05-21 23:59:13 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:59:13 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:59:13 --> Utf8 Class Initialized
INFO - 2023-05-21 23:59:13 --> URI Class Initialized
DEBUG - 2023-05-21 23:59:13 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:59:13 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:59:13 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:59:13 --> Router Class Initialized
INFO - 2023-05-21 23:59:13 --> Output Class Initialized
INFO - 2023-05-21 23:59:13 --> Security Class Initialized
DEBUG - 2023-05-21 23:59:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:59:13 --> Input Class Initialized
INFO - 2023-05-21 23:59:13 --> Language Class Initialized
DEBUG - 2023-05-21 23:59:13 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:59:13 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:59:13 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:59:13 --> Loader Class Initialized
INFO - 2023-05-21 23:59:13 --> Helper loaded: url_helper
INFO - 2023-05-21 23:59:13 --> Helper loaded: file_helper
INFO - 2023-05-21 23:59:13 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:59:13 --> Helper loaded: main_helper
INFO - 2023-05-21 23:59:14 --> Database Driver Class Initialized
INFO - 2023-05-21 23:59:14 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:59:14 --> Email Class Initialized
INFO - 2023-05-21 23:59:14 --> Controller Class Initialized
DEBUG - 2023-05-21 23:59:14 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:59:14 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:14 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:14 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:59:14 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:59:16 --> Config Class Initialized
INFO - 2023-05-21 23:59:16 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:59:16 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:59:16 --> Utf8 Class Initialized
INFO - 2023-05-21 23:59:16 --> URI Class Initialized
DEBUG - 2023-05-21 23:59:16 --> ============ Segments ======> Array
(
    [0] => uihelper
    [1] => skrip
)

DEBUG - 2023-05-21 23:59:16 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper ======> 
DEBUG - 2023-05-21 23:59:16 --> ============ Rewrite SetClass Routing ==========>  class: uihelper
INFO - 2023-05-21 23:59:16 --> Router Class Initialized
INFO - 2023-05-21 23:59:16 --> Output Class Initialized
INFO - 2023-05-21 23:59:16 --> Security Class Initialized
DEBUG - 2023-05-21 23:59:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:59:16 --> Input Class Initialized
INFO - 2023-05-21 23:59:16 --> Language Class Initialized
DEBUG - 2023-05-21 23:59:16 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:59:16 --> FIX Method ====> skrip
INFO - 2023-05-21 23:59:16 --> Loader Class Initialized
INFO - 2023-05-21 23:59:16 --> Helper loaded: url_helper
INFO - 2023-05-21 23:59:16 --> Helper loaded: file_helper
INFO - 2023-05-21 23:59:16 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:59:16 --> Helper loaded: main_helper
INFO - 2023-05-21 23:59:16 --> Database Driver Class Initialized
INFO - 2023-05-21 23:59:16 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:59:16 --> Email Class Initialized
INFO - 2023-05-21 23:59:16 --> Controller Class Initialized
DEBUG - 2023-05-21 23:59:16 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:59:16 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:16 --> === Menu (Current Url) ===Array
(
)

DEBUG - 2023-05-21 23:59:16 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
INFO - 2023-05-21 23:59:39 --> Config Class Initialized
INFO - 2023-05-21 23:59:39 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:59:39 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:59:39 --> Utf8 Class Initialized
INFO - 2023-05-21 23:59:39 --> URI Class Initialized
DEBUG - 2023-05-21 23:59:39 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:59:39 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:59:39 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:59:39 --> Router Class Initialized
INFO - 2023-05-21 23:59:39 --> Output Class Initialized
INFO - 2023-05-21 23:59:39 --> Security Class Initialized
DEBUG - 2023-05-21 23:59:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:59:39 --> Input Class Initialized
INFO - 2023-05-21 23:59:39 --> Language Class Initialized
DEBUG - 2023-05-21 23:59:39 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:59:39 --> FIX Method ====> index
INFO - 2023-05-21 23:59:39 --> Loader Class Initialized
INFO - 2023-05-21 23:59:39 --> Helper loaded: url_helper
INFO - 2023-05-21 23:59:39 --> Helper loaded: file_helper
INFO - 2023-05-21 23:59:39 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:59:39 --> Helper loaded: main_helper
INFO - 2023-05-21 23:59:39 --> Database Driver Class Initialized
INFO - 2023-05-21 23:59:39 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:59:39 --> Email Class Initialized
INFO - 2023-05-21 23:59:39 --> Controller Class Initialized
DEBUG - 2023-05-21 23:59:39 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:59:39 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:39 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:39 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:59:39 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:59:39 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:59:39 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:59:39 --> Final output sent to browser
DEBUG - 2023-05-21 23:59:39 --> Total execution time: 0.1859
INFO - 2023-05-21 23:59:40 --> Config Class Initialized
INFO - 2023-05-21 23:59:40 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:59:40 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:59:40 --> Utf8 Class Initialized
INFO - 2023-05-21 23:59:40 --> URI Class Initialized
DEBUG - 2023-05-21 23:59:40 --> ============ Segments ======> Array
(
    [0] => public
    [1] => assets
    [2] => vendor
    [3] => bootstrap
    [4] => js
    [5] => popper.min.js.map
)

DEBUG - 2023-05-21 23:59:40 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public ======> 
DEBUG - 2023-05-21 23:59:40 --> ============ Rewrite SetClass Routing ==========>  class: public
INFO - 2023-05-21 23:59:40 --> Router Class Initialized
INFO - 2023-05-21 23:59:40 --> Output Class Initialized
INFO - 2023-05-21 23:59:40 --> Security Class Initialized
DEBUG - 2023-05-21 23:59:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:59:40 --> Input Class Initialized
INFO - 2023-05-21 23:59:40 --> Language Class Initialized
DEBUG - 2023-05-21 23:59:40 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Public.php  ==> Exist: 
ERROR - 2023-05-21 23:59:40 --> 404 Page Not Found: Public/assets
INFO - 2023-05-21 23:59:41 --> Config Class Initialized
INFO - 2023-05-21 23:59:41 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:59:41 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:59:41 --> Utf8 Class Initialized
INFO - 2023-05-21 23:59:41 --> URI Class Initialized
DEBUG - 2023-05-21 23:59:41 --> ============ Segments ======> Array
(
    [0] => navigasi
)

DEBUG - 2023-05-21 23:59:41 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi ======> 
DEBUG - 2023-05-21 23:59:41 --> ============ Rewrite SetClass Routing ==========>  class: navigasi
INFO - 2023-05-21 23:59:41 --> Router Class Initialized
INFO - 2023-05-21 23:59:41 --> Output Class Initialized
INFO - 2023-05-21 23:59:41 --> Security Class Initialized
DEBUG - 2023-05-21 23:59:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:59:41 --> Input Class Initialized
INFO - 2023-05-21 23:59:41 --> Language Class Initialized
DEBUG - 2023-05-21 23:59:41 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Navigasi.php  ==> Exist: 1
DEBUG - 2023-05-21 23:59:41 --> FIX Method ====> index
INFO - 2023-05-21 23:59:41 --> Loader Class Initialized
INFO - 2023-05-21 23:59:41 --> Helper loaded: url_helper
INFO - 2023-05-21 23:59:41 --> Helper loaded: file_helper
INFO - 2023-05-21 23:59:41 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:59:41 --> Helper loaded: main_helper
INFO - 2023-05-21 23:59:41 --> Database Driver Class Initialized
INFO - 2023-05-21 23:59:41 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:59:41 --> Email Class Initialized
INFO - 2023-05-21 23:59:41 --> Controller Class Initialized
DEBUG - 2023-05-21 23:59:41 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:59:41 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:41 --> === Menu (Current Url) ===Array
(
    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:41 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:59:41 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 1
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)

INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/dtconfig/dt_navigasi.js
INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/button_group.php
INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/toolbar.panel.php
INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/public/assets/js/utils/dt_default_skrip.js
INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/datatables/datatables.responsive.php
DEBUG - 2023-05-21 23:59:41 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/themes.php
INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/head/main.php
INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/navbar/navbar.dore.php
INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/component/sidebar/sidebar.dore.php
INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/footer/main.php
INFO - 2023-05-21 23:59:41 --> File loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/views/template/dore.php
INFO - 2023-05-21 23:59:41 --> Final output sent to browser
DEBUG - 2023-05-21 23:59:41 --> Total execution time: 0.0748
INFO - 2023-05-21 23:59:41 --> Config Class Initialized
INFO - 2023-05-21 23:59:41 --> Hooks Class Initialized
DEBUG - 2023-05-21 23:59:41 --> UTF-8 Support Enabled
INFO - 2023-05-21 23:59:41 --> Utf8 Class Initialized
INFO - 2023-05-21 23:59:41 --> URI Class Initialized
DEBUG - 2023-05-21 23:59:41 --> ============ Segments ======> Array
(
    [0] => ws
    [1] => uihelper
    [2] => navigasi
)

DEBUG - 2023-05-21 23:59:41 --> ============ IS DIR /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws ======> 1
DEBUG - 2023-05-21 23:59:41 --> ============ Rewrite SetClass Routing ==========>  class: Uihelper
INFO - 2023-05-21 23:59:41 --> Router Class Initialized
INFO - 2023-05-21 23:59:41 --> Output Class Initialized
INFO - 2023-05-21 23:59:41 --> Security Class Initialized
DEBUG - 2023-05-21 23:59:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2023-05-21 23:59:41 --> Input Class Initialized
INFO - 2023-05-21 23:59:41 --> Language Class Initialized
DEBUG - 2023-05-21 23:59:41 --> ============ FIX Controller FilePath =======> /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/controllers/Ws/Uihelper.php  ==> Exist: 1
DEBUG - 2023-05-21 23:59:41 --> FIX Method ====> navigasi
DEBUG - 2023-05-21 23:59:41 --> ====== MASUK HTTP METHOD ====> navigasi_get
INFO - 2023-05-21 23:59:41 --> Loader Class Initialized
INFO - 2023-05-21 23:59:41 --> Helper loaded: url_helper
INFO - 2023-05-21 23:59:41 --> Helper loaded: file_helper
INFO - 2023-05-21 23:59:41 --> Helper loaded: formloader_helper
INFO - 2023-05-21 23:59:41 --> Helper loaded: main_helper
INFO - 2023-05-21 23:59:42 --> Database Driver Class Initialized
INFO - 2023-05-21 23:59:42 --> Session: Class initialized using 'files' driver.
INFO - 2023-05-21 23:59:42 --> Email Class Initialized
INFO - 2023-05-21 23:59:42 --> Controller Class Initialized
DEBUG - 2023-05-21 23:59:42 --> === Allowed Permission ===Array
(
    [0] => 2
    [1] => 6
    [2] => 3
    [3] => 5
)

DEBUG - 2023-05-21 23:59:42 --> === All Menu With Allowed Permission ===Array
(
    [0] => stdClass Object
        (
            [id] => 5f339Af3
            [nama] => Dashboard
            [lvl] => 1
            [parent] => 
            [url] => dashboard
            [parrent_element] => sidebar
            [bobot] => 0
            [icon] => iconsmind-Shop-4
            [deskripsi] => 
            [aktif] => 1
            [permission] => 6
        )

    [1] => stdClass Object
        (
            [id] => 5f339ae2
            [nama] => Halaman Login
            [lvl] => 1
            [parent] => 
            [url] => auth/login
            [parrent_element] => page
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 5
        )

    [2] => stdClass Object
        (
            [id] => fK9dj32L
            [nama] => Master Data
            [lvl] => 1
            [parent] => 
            [url] => #
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Big-Data
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [3] => stdClass Object
        (
            [id] => 5f339ae1
            [nama] => Navigasi
            [lvl] => 1
            [parent] => 
            [url] => navigasi
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-menu
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [4] => stdClass Object
        (
            [id] => 6DTlOtIs
            [nama] => Web Service User Managemen
            [lvl] => 1
            [parent] => 
            [url] => ws/user/crud
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => Url CRUD User
            [aktif] => 1
            [permission] => 2
        )

    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [6] => stdClass Object
        (
            [id] => Us9lGvUP
            [nama] => Permission
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => permission
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => iconsmind-Security-Settings
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [7] => stdClass Object
        (
            [id] => ob7ISG6S
            [nama] => User Management
            [lvl] => 2
            [parent] => fK9dj32L
            [url] => users
            [parrent_element] => sidebar
            [bobot] => 1
            [icon] => simple-icon-people
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

    [8] => stdClass Object
        (
            [id] => ig6uLLQ9
            [nama] => Web Service Permission
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/permission
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:42 --> === Menu (Current Url) ===Array
(
    [5] => stdClass Object
        (
            [id] => 5f339ae3
            [nama] => Web Service  Navigasi
            [lvl] => 1
            [parent] => 
            [url] => ws/uihelper/navigasi
            [parrent_element] => url
            [bobot] => 1
            [icon] => 
            [deskripsi] => 
            [aktif] => 1
            [permission] => 2
        )

)

DEBUG - 2023-05-21 23:59:42 --> Config file loaded: /Applications/XAMPP/xamppfiles/htdocs/akuntansi/application/config/menu.php
DEBUG - 2023-05-21 23:59:42 -->  ======= MENU this PAGE Array
(
    [permission] => Array
        (
            [0] => 2
        )

    [harusLogin] => 1
    [menus] => Array
        (
            [5f339Af3] => Array
                (
                    [id] => 5f339Af3
                    [induk] => 
                    [lvl] => 1
                    [text] => Dashboard
                    [icon] => iconsmind-Shop-4
                    [link] => dashboard
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae2] => Array
                (
                    [id] => 5f339ae2
                    [induk] => 
                    [lvl] => 1
                    [text] => Halaman Login
                    [icon] => 
                    [link] => auth/login
                    [parrent_element] => page
                    [active] => 
                )

            [fK9dj32L] => Array
                (
                    [id] => fK9dj32L
                    [induk] => 
                    [lvl] => 1
                    [text] => Master Data
                    [icon] => iconsmind-Big-Data
                    [link] => #
                    [parrent_element] => sidebar
                    [active] => 
                )

            [5f339ae1] => Array
                (
                    [id] => 5f339ae1
                    [induk] => 
                    [lvl] => 1
                    [text] => Navigasi
                    [icon] => simple-icon-menu
                    [link] => navigasi
                    [parrent_element] => sidebar
                    [active] => 
                )

            [6DTlOtIs] => Array
                (
                    [id] => 6DTlOtIs
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service User Managemen
                    [icon] => 
                    [link] => ws/user/crud
                    [parrent_element] => url
                    [active] => 
                )

            [5f339ae3] => Array
                (
                    [id] => 5f339ae3
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service  Navigasi
                    [icon] => 
                    [link] => ws/uihelper/navigasi
                    [parrent_element] => url
                    [active] => 1
                )

            [ig6uLLQ9] => Array
                (
                    [id] => ig6uLLQ9
                    [induk] => 
                    [lvl] => 1
                    [text] => Web Service Permission
                    [icon] => 
                    [link] => ws/uihelper/permission
                    [parrent_element] => url
                    [active] => 
                )

        )

    [subMenus] => Array
        (
            [fK9dj32L] => Array
                (
                    [induk] => fK9dj32L
                    [menus] => Array
                        (
                            [0] => Array
                                (
                                    [lvl] => 2
                                    [text] => Permission
                                    [icon] => iconsmind-Security-Settings
                                    [link] => permission
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                            [1] => Array
                                (
                                    [lvl] => 2
                                    [text] => User Management
                                    [icon] => simple-icon-people
                                    [link] => users
                                    [parrent_element] => sidebar
                                    [active] => 
                                )

                        )

                )

        )

)


<?php
/**
 * Created by PhpStorm.
 * User: LukMcCall
 * Date: 13.08.2018
 * Time: 12:31
 */

return [
    [
        'id' => 'home',
        "type" => 'page',
        "title" => "CsWild - Rekordy",
        "file" => "home",
        "url" => "",
        "with" => null
    ],
    [
       'id' => 'dr1',
       'type' => 'page',
       'title' => 'Deathrun 1',
       'file' => 'servers.dr1',
       'url' => 'deathrun-1',
       'with' => [
           'recordsS0' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 0 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS0",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS1' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 1 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS1",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS2' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 2 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS2",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS3' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 3 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS3",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS4' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 4 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS4",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS5' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 5 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS5",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS6' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 6 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS6",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS7' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 7 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS7",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS8' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 8 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS8",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS9' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 9 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS9",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS10' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 10 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS10",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS11' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 11 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS11",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS12' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 12 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS12",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'recordsS13' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars WHERE style = 13 ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.recordsS13",
                                "time": 20
                            },
                            "useKey":"map"
                       }',
           'topPlayers' => '{
                            "connection":"dr1",
	                        "method": "rawSelect",
	                        "sql": "SELECT * FROM `users` ORDER BY points DESC LIMIT 10",
                            "cache": {
                                "key": "<?id?>.topPlayers",
                                "time": 20
                            }
                       }'

       ],
    ],
    [
       'id' => 'dr2',
       'type' => 'page',
       'title' => 'Deathrun 2',
       'file' => 'servers.dr2',
       'url' => 'deathrun-2',
       'with' => [
           'records' => '{
                            "connection":"dr2",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.records",
                                "time": 20
                            },
                            "useKey":"map"
                       }'
       ],
    ],
    [
       'id' => 'dr3',
       'type' => 'page',
       'title' => 'Deathrun 3',
       'file' => 'servers.dr3',
       'url' => 'deathrun-3',
       'with' => [
           'records' => '{
                            "connection":"dr3",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.records",
                                "time": 20
                            },
                            "useKey":"map"
                       }'
       ],
    ],
    [
       'id' => 'dr4',
       'type' => 'page',
       'title' => 'Deathrun 4',
       'file' => 'servers.dr4',
       'url' => 'deathrun-4',
       'with' => [
           'records' => '{
                            "connection":"dr4",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.records",
                                "time": 20
                            },
                            "useKey":"map"
                       }'
       ],
    ],
    [
       'id' => 'dr5',
       'type' => 'page',
       'title' => 'Deathrun 5',
       'file' => 'servers.dr5',
       'url' => 'deathrun-5',
       'with' => [
           'records' => '{
                            "connection":"dr5",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.records",
                                "time": 20
                            },
                            "useKey":"map"
                       }'
       ],
    ],
    [
       'id' => 'drclass',
       'type' => 'page',
       'title' => 'Deathrun Klasy',
       'file' => 'servers.drclass',
       'url' => 'deathrun-class',
       'with' => [
           'records' => '{
                            "connection":"drclass",
	                        "method": "rawSelect",
	                        "sql": "SELECT r.auth,u.name,r.map,r.time,r.jumps,r.style FROM( SELECT *, @rn := IF(@prev = map, @rn + 1, 1) AS rn, @prev := map FROM playertimes JOIN (SELECT @prev := NULL, @rn := 0) AS vars ORDER BY map, time ASC, auth) AS r, users AS u WHERE r.rn <= 10 AND r.auth = u.auth ORDER BY r.map ASC, r.time ASC",
                            "cache": {
                                "key": "<?id?>.records",
                                "time": 20
                            },
                            "useKey":"map"
                       }'
       ],
    ],
    [
       'id' => 'profile',
       'type' => 'profile',
       'title' => 'Profil',
       'file' => 'profile',
       'url' => 'profil',
       'with' => [
           "dr1.points" => '{
                            "connection":"dr1",
                            "method":"simpleGet", 
                            "table":"users", 
                            "what":"points", 
                            "where":"auth = <?profile->steamId|steamID3|string?>",
                            "cache": {
                                "key": "dr1.profile.points.<?profile->steamId?>",
                                "time": 20
                            }
                       }',
           "dr1.records" => '{
                            "connection":"dr1",
                            "method":"simpleGet",
                            "table":"playertimes",
                            "what":"*",
                            "where":"auth = <?profile->steamId|steamID3|string?>",
                            "useKey":"map",
                            "orderBy":"time",
                            "cache": {
                                "key": "dr1.profile.records.<?profile->steamId?>",
                                "time": 20
                            }
                        }',
           "dr2.records" => '{
                            "connection":"dr2",
                            "method":"simpleGet",
                            "table":"playertimes",
                            "what":"*",
                            "where":"auth = <?profile->steamId|steamID3|string?>",
                            "useKey":"map",
                            "orderBy":"time",
                            "cache": {
                                "key": "dr2.profile.records.<?profile->steamId?>",
                                "time": 20
                            }
                        }',
           "dr3.records" => '{
                            "connection":"dr3",
                            "method":"simpleGet",
                            "table":"playertimes",
                            "what":"*",
                            "where":"auth = <?profile->steamId|steamID3|string?>",
                            "useKey":"map",
                            "orderBy":"time",
                            "cache": {
                                "key": "dr3.profile.records.<?profile->steamId?>",
                                "time": 20
                            }
                        }',
           "dr4.records" => '{
                            "connection":"dr4",
                            "method":"simpleGet",
                            "table":"playertimes",
                            "what":"*",
                            "where":"auth = <?profile->steamId|steamID3|string?>",
                            "useKey":"map",
                            "orderBy":"time",
                            "cache": {
                                "key": "dr4.profile.records.<?profile->steamId?>",
                                "time": 20
                            }
                        }',
           "dr5.records" => '{
                            "connection":"dr5",
                            "method":"simpleGet",
                            "table":"playertimes",
                            "what":"*",
                            "where":"auth = <?profile->steamId|steamID3|string?>",
                            "useKey":"map",
                            "orderBy":"time",
                            "cache": {
                                "key": "dr5.profile.records.<?profile->steamId?>",
                                "time": 20
                            }
                        }',
           "drclass.records" => '{
                            "connection":"drclass",
                            "method":"simpleGet",
                            "table":"playertimes",
                            "what":"*",
                            "where":"auth = <?profile->steamId|steamID3|string?>",
                            "useKey":"map",
                            "orderBy":"time",
                            "cache": {
                                "key": "drclass.profile.records.<?profile->steamId?>",
                                "time": 20
                            }
                        }'
       ],
    ]
];
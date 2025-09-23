<?php
    function getUrl($page){
        $url = 'dashboard.php';
        switch ($page) {
            case 'dashboard':
                $url = 'dashboard.php';
                break;

            case 'slmd-list':
                $url = 'slmd-list.php';
                break;

            case 'add-slmd':
                $url = 'add-slmd.php';
                break;

            case 'business-type-list':
                $url = 'business-type-list.php';
                break;

            case 'business-type-new':
                $url = 'business-type-new.php';
                break;

            case 'business-type-edit':
                $url = 'business-type-edit.php';
                break;

            case 'bank-list':
                $url = 'bank-list.php';
                break;

            case 'bank-new':
                $url = 'bank-new.php';
                break;

            case 'bank-edit':
                $url = 'bank-edit.php';
                break;

            case 'official-role-list':
                $url = 'official-role-list.php';
                break;

            case 'official-role-new':
                $url = 'official-role-new.php';
                break;

            case 'official-role-edit':
                $url = 'official-role-edit.php';
                break;

            case 'country-list':
                $url = 'country-list.php';
                break;

            case 'country-new':
                $url = 'country-new.php';
                break;

            case 'country-edit':
                $url = 'country-edit.php';
                break;

            case 'cluster-list':
                $url = 'cluster-list.php';
                break;

            case 'cluster-new':
                $url = 'cluster-new.php';
                break;

            case 'cluster-edit':
                $url = 'cluster-edit.php';
                break;

            case 'group-location-list':
                $url = 'group-location-list.php';
                break;

            case 'group-location-new':
                $url = 'group-location-new.php';
                break;

            case 'group-location-edit':
                $url = 'group-location-edit.php';
                break;

            case 'group-list':
                $url = 'group-list.php';
                break;

            case 'group-new':
                $url = 'group-new.php';
                break;

            case 'group-edit':
                $url = 'group-edit.php';
                break;

            case 'personal-data-list':
                $url = 'personal-data-list.php';
                break;

            case 'personal-data-new':
                $url = 'personal-data-new.php';
                break;

            case 'personal-data-edit':
                $url = 'personal-data-edit.php';
                break;
          
        }
        return $url;
    }
?>
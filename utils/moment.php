<?php

function moment($datetime){
    $now = new DateTime();
    $now->modify('-1 hour'); // Subtract 1 hour from the current time
    $date = new DateTime($datetime);
    $interval = $now->diff($date);

    if ($interval->y > 0) {
        return ($interval->y == 1) ? '1 year ago' : $interval->y . ' years ago';
    }
    if ($interval->m > 0) {
        return ($interval->m == 1) ? '1 month ago' : $interval->m . ' months ago';
    }
    if ($interval->d > 0) {
        if ($interval->d == 1) {
            return 'yesterday';
        } elseif ($interval->d == 2) {
            return '2 days ago';
        } else {
            return $interval->d . ' days ago';
        }
    }
    if ($interval->h > 0) {
        return ($interval->h == 1) ? '1 hour ago' : $interval->h . 'h';
    }
    if ($interval->i > 0) {
        return ($interval->i == 1) ? '1 minute ago' : $interval->i . ' minutes ago';
    }
    if ($interval->s > 0) {
        return ($interval->s == 1) ? '1 second ago' : $interval->s . ' seconds ago';
    }

    return 'just now';
}
?>

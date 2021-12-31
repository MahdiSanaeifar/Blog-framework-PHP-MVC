<?php

/**
 * Return active class name
 */
function isActive($url, $contain = true)
{
    if ($contain) {
        return (strpos(currentUrl(), $url) === 0) ? 'active' : '';
    } else {
        return $url === currentUrl() ? 'active' : '';
    }
}

/**
 * Return error class name
 */
function errorClass($name)
{
    return errorExists($name) ? 'is-invalid' : '';
}

/**
 * Return error text was set in System\Request
 */
function errorText($name)
{
    return errorExists($name) ? '<div><small class="text-danger">' . error($name) . '</small></div>' : '';

}

/**
 * Return value of inputs, when user has an error after submit.
 */
function oldOrValue($name, $value)
{
    return empty(old($name)) ? $value : old($name);
}

/**
 * $data get all data from database.
 * this is a custom paginate
 */
function paginate($data, $perPage)
{
    $totalRows = count($data);
    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $totalPages = ceil($totalRows / $perPage);
    $currentPage = min($currentPage, $totalPages);
    $currentPage = max($currentPage, 1);
    $currentRow = ($currentPage - 1) * $perPage;
    $data = array_slice($data, $currentRow, $perPage);
    return $data;
}

/**
 * create paginate HTML tags.
 */
function paginateView($data, $perPage)
{
    $totalRows = $data;
    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $totalPages = ceil($totalRows / $perPage);
    $currentPage = min($currentPage, $totalPages);
    $currentPage = max($currentPage, 1);

    $paginateView = '';
    '<a href="#" ><i class="ui-arrow-left"></i></a>';
    $paginateView .= ($currentPage != 1) ? '<a href="' . paginateUrl(1) . '" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>' : '';
    $paginateView .= (($currentPage - 2) >= 1) ? '<a href="' . paginateUrl($currentPage - 2) . '" class="pagination__page">' . ($currentPage - 2) . '</a>' : '';
    $paginateView .= (($currentPage - 1) >= 1) ? '<a href="' . paginateUrl($currentPage - 1) . '" class="pagination__page">' . ($currentPage - 1) . '</a>' : '';
    $paginateView .= '<a href="' . paginateUrl($currentPage) . '" class="pagination__page pagination__page--current">' . ($currentPage) . '</a>';
    $paginateView .= (($currentPage + 1) <= $totalPages) ? '<a href="' . paginateUrl($currentPage + 1) . '" class="pagination__page">' . ($currentPage + 1) . '</a>' : '';
    $paginateView .= (($currentPage + 2) <= $totalPages) ? '<a href="' . paginateUrl($currentPage + 2) . '" class="pagination__page">' . ($currentPage + 2) . '</a>' : '';
    $paginateView .= ($currentPage != $totalPages) ? '<a href="' . paginateUrl($totalPages) . '" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-left"></i></a>' : '';

    return '<nav class="pagination">' . $paginateView . '</nav>';
}

/**
 * generate pginate url.
 */
function paginateUrl($page)
{
    $urlArray = explode('?', currentUrl());
    if (isset($urlArray[1])) {

        $_GET['page'] = $page;
        $getVariables = array_map(function ($value, $key) {return $key . '=' . $value;}, $_GET, array_keys($_GET));
        return $urlArray[0] . '?' . implode('&', $getVariables);
    } else {
        return currentUrl() . '?page=' . $page;
    }
}

/**
 * Return a formatted Carbon date in Jalalian.
 */
function formatDate($date, string $format)
{
    // Available formats :
    // '%B %d، %Y' => دی 02، 1391
    // '%A, %d %B %y' => جمعه، 23 اسفند 97
    // 'datetime' => 1391-10-02 00:00:00
    // 'date' => 1391-10-02
    // 'time' => 00:00:00

    return \Morilog\Jalali\Jalalian::forge($date)->format($format);
}

/**
 * Convert English Numbers to Persian.
 */
function toPersianNum($number)
{
    $number = str_replace("1", "۱", $number);
    $number = str_replace("2", "۲", $number);
    $number = str_replace("3", "۳", $number);
    $number = str_replace("4", "۴", $number);
    $number = str_replace("5", "۵", $number);
    $number = str_replace("6", "۶", $number);
    $number = str_replace("7", "۷", $number);
    $number = str_replace("8", "۸", $number);
    $number = str_replace("9", "۹", $number);
    $number = str_replace("0", "۰", $number);
    return $number;
}

/**
 * Get first $limit characters from string, respecting full words
 *
 * @param string $value
 * @param integer $limit
 * @param string $end
 * @return void
 */
function str_limit($value, $limit = 100, $end = '...')
{
    $limit = $limit - mb_strlen($end); // Take into account $end string into the limit
    $valuelen = mb_strlen($value);
    return $limit < $valuelen ? mb_substr($value, 0, mb_strrpos($value, ' ', $limit - $valuelen)) . $end : $value;
}

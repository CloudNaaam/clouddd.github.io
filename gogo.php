<?php
// URL 인자를 'url'이라는 이름으로 받아옵니다.
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    // 유효한 URL인지 확인
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // 리다이렉션 수행
        header("Location: " . $url);
        exit();
    } else {
        echo "Invalid URL.";
    }
} else {
    echo "No URL provided.";
}
?>

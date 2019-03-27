<?php 
/*======================
  = ionut @21-mar-2019 =
  ======================*/
function getPublishedPosts($conn) {
    global $conn;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}
function getMaxId() {
	global $conn;
	$sql = "SELECT max(id) FROM posts WHERE published=true";
	$result = mysqli_query($conn, $sql);
  return mysqli_fetch_assoc($result);
}
function getSinglePost($id) {
	global $conn;
	$sql = "SELECT * FROM posts WHERE id=" . $id . " AND published=true";
	$result = mysqli_query($conn, $sql);
	return mysqli_fetch_assoc($result);
}
function getPostsByCathegoryAndLanguage($conn, $cat, $language) {
	global $conn;
	$sql = "SELECT * FROM posts WHERE language='" . $language . "' AND cathegory='" . $cat . "' AND published=true";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}
?>
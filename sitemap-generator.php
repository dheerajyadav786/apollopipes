<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <!--  created with Free Online Sitemap Generator www.xml-sitemaps.com  -->
    <url>
        <loc>https://brandbazooka.com/</loc>
        <lastmod>2021-08-02T08:00:37+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
    </url>
</urlset>
<?php

$con = mysqli_connect("localhost", "indaplpi_newap", "Dheeraj@123!", "indaplpi_newapollo");
$blogs = $con->query("SELECT `url` FROM products");

$array_products = [];
if ($products->num_rows > 0) {
    while ($row = $products->fetch_assoc()) {
        $products_data[] = $row;
    }
}

?>
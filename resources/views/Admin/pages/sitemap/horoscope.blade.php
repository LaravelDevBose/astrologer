<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($Horoscope as $article)
        <url>
            <loc>https://demo.fidlead.com/admin/admin/Horoscope/{{ $article->title }}</loc>
            <lastmod>{{ $article->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>

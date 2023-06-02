<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{url('/')}}</loc>
        <lastmod>{{ date("Y-m-d H:i:s") }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{url('/')}}/login</loc>
        <lastmod>{{ date("Y-m-d H:i:s") }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1</priority>
    </url>

    <url>
        <loc>{{url('/')}}/register</loc>
        <lastmod>{{ date("Y-m-d H:i:s") }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1</priority>
    </url>

    @foreach ($users as $user)
        <url>
            <loc>{{url('/')}}/vc/{{$user->slug}}</loc>
            <lastmod>{{ $user->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>1</priority>
        </url>
    @endforeach
</urlset>
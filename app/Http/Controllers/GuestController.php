<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GuestController extends Controller
{
    /**
     * Display homepage with hero section and latest updates
     */
    public function home()
    {
        return view('cakning.home');
    }

    /**
     * Display about page with talents information
     */
    public function about()
    {
        // Dynamic talent data based on available images
        $talents = $this->getTalentData();

        return view('cakning.about', compact('talents'));
    }

    /**
     * Display events page with upcoming and past events
     */
    public function event()
    {
        // Sample event data - in production, this would come from database
        $upcomingEvents = $this->getUpcomingEvents();
        $pastEvents = $this->getPastEvents();

        return view('cakning.event', compact('upcomingEvents', 'pastEvents'));
    }

    /**
     * Display blog page with articles and news
     */
    public function blog()
    {
        // Sample blog posts - in production, this would come from posts table
        $blogPosts = $this->getBlogPosts();

        return view('cakning.blog', compact('blogPosts'));
    }

    /**
     * Display gallery page with photo collections
     */
    public function gallery()
    {
        // Dynamic gallery based on available images
        $galleryImages = $this->getGalleryImages();

        return view('cakning.gallery', compact('galleryImages'));
    }

    /**
     * Display contact page with information and form
     */
    public function contact()
    {
        return view('cakning.contact');
    }

    /**
     * Handle contact form submission
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // In production, save to database or send email
        // For now, just return success response

        return back()->with('success', 'Pesan Anda telah terkirim. Terima kasih!');
    }

    /**
     * Get talent data from available images
     */
    private function getTalentData()
    {
        // Get available talent images
        $talentImages = glob(public_path('images/talents/*.{jpg,jpeg,png,webp}'), GLOB_BRACE);
        $availableImages = [];

        foreach ($talentImages as $imagePath) {
            $filename = pathinfo($imagePath, PATHINFO_FILENAME);
            $availableImages[] = $filename;
        }

        // Talent data mapping
        $talentData = [
            "maudah" => [
                "name" => "Cak Maudah",
                "tb" => "169 cm",
                "bb" => "72 kg",
                "ig" => "https://www.instagram.com/maudahrw/",
                "position" => "Talent",
            ],
            "juan" => [
                "name" => "Cak Juan",
                "tb" => "179 cm",
                "bb" => "113 kg",
                "ig" => "https://www.instagram.com/juanssss_/",
                "position" => "Talent",
            ],
            "abel" => [
                "name" => "Cak Abel",
                "tb" => "171 cm",
                "bb" => "69 kg",
                "ig" => "https://www.instagram.com/abelpratamaaaa_/",
                "position" => "Talent",
            ],
            "joana" => [
                "name" => "Ning Joana",
                "tb" => "164 cm",
                "bb" => "53 kg",
                "ig" => "https://www.instagram.com/joanaa_sohilait/",
                "position" => "Talent",
            ],
            "deninta" => [
                "name" => "Ning Deninta",
                "tb" => "168 cm",
                "bb" => "59 kg",
                "ig" => "https://www.instagram.com/denintavasthy/",
                "position" => "Talent",
            ],
            // Add more talent data as needed
        ];

        $talents = [];
        foreach ($availableImages as $imageFile) {
            if (isset($talentData[$imageFile])) {
                $imageExtensions = ['jpg', 'jpeg', 'png', 'webp'];
                $imageUrl = null;

                foreach ($imageExtensions as $ext) {
                    if (file_exists(public_path("images/talents/{$imageFile}.{$ext}"))) {
                        $imageUrl = asset("images/talents/{$imageFile}.{$ext}");
                        break;
                    }
                }

                if ($imageUrl) {
                    $talents[] = array_merge($talentData[$imageFile], [
                        "image" => $imageUrl,
                        "slug" => $imageFile
                    ]);
                }
            }
        }

        return $talents;
    }

    /**
     * Get upcoming events data
     */
    private function getUpcomingEvents()
    {
        return [
            [
                'title' => 'Festival Cak & Ning 2025',
                'date' => '2025-12-15',
                'time' => '19:00 WIB',
                'location' => 'Gedung Negara Grahadi, Surabaya',
                'description' => 'Festival tahunan yang menampilkan kebudayaan Surabaya dengan performance dari seluruh anggota paguyuban.',
                'image' => asset('images/events/festival-2025.jpg'),
                'batik_pattern' => 'batik-kawung-event'
            ],
            [
                'title' => 'Workshop Batik Tradisional',
                'date' => '2025-11-20',
                'time' => '14:00 WIB',
                'location' => 'Kampung Batik Jetis, Sidoarjo',
                'description' => 'Workshop pembelajaran membuat batik tradisional dengan motif khas Surabaya.',
                'image' => asset('images/events/workshop-batik.jpg'),
                'batik_pattern' => 'batik-parang-event'
            ],
        ];
    }

    /**
     * Get past events data
     */
    private function getPastEvents()
    {
        return [
            [
                'title' => 'Pameran Budaya Arek Suroboyo',
                'date' => '2024-08-17',
                'location' => 'Balai Kota Surabaya',
                'description' => 'Pameran budaya dalam rangka memperingati HUT RI ke-79.',
                'image' => asset('images/events/pameran-2024.jpg'),
                'batik_pattern' => 'batik-truntum-event'
            ],
        ];
    }

    /**
     * Get blog posts data
     */
    private function getBlogPosts()
    {
        return [
            [
                'title' => 'Sejarah Paguyuban Cak & Ning Surabaya',
                'slug' => 'sejarah-paguyuban-cak-ning-surabaya',
                'excerpt' => 'Perjalanan panjang paguyuban dalam melestarikan budaya Surabaya...',
                'content' => 'Content lengkap artikel...',
                'published_at' => '2024-10-01',
                'author' => 'Admin Paguyuban',
                'image' => asset('images/blog/sejarah-paguyuban.jpg'),
                'tags' => ['sejarah', 'budaya', 'surabaya']
            ],
            [
                'title' => 'Filosofi Motif Batik dalam Desain Website',
                'slug' => 'filosofi-motif-batik-website',
                'excerpt' => 'Mengapa kami mengintegrasikan motif batik tradisional dalam desain website...',
                'content' => 'Content lengkap artikel...',
                'published_at' => '2024-09-15',
                'author' => 'Tim IT Paguyuban',
                'image' => asset('images/blog/filosofi-batik.jpg'),
                'tags' => ['batik', 'teknologi', 'desain']
            ],
        ];
    }

    /**
     * Get gallery images
     */
    private function getGalleryImages()
    {
        $galleryPath = public_path('images/gallery');
        $galleries = [];

        if (File::exists($galleryPath)) {
            $categories = ['events', 'talents', 'behind-scenes', 'community'];

            foreach ($categories as $category) {
                $categoryPath = $galleryPath . '/' . $category;
                if (File::exists($categoryPath)) {
                    $images = glob($categoryPath . '/*.{jpg,jpeg,png,webp}', GLOB_BRACE);

                    $galleries[$category] = array_map(function($imagePath) use ($category) {
                        $filename = basename($imagePath);
                        return [
                            'url' => asset("images/gallery/{$category}/{$filename}"),
                            'alt' => pathinfo($filename, PATHINFO_FILENAME),
                            'category' => ucfirst($category)
                        ];
                    }, array_slice($images, 0, 12)); // Limit 12 images per category
                }
            }
        }

        return $galleries;
    }
}

# Eka Adhikari Cipta - Company Profile Website

This is a modern, responsive company profile website built with Laravel 12 and Tailwind CSS 4.0.

## Features

- **Responsive Design**: Fully responsive design that works on all devices
- **Modern UI/UX**: Clean, professional design with smooth animations
- **Multiple Pages**: Home, About Us, Collection, and Contact pages
- **Image Gallery**: Showcase of company products and collections
- **Contact Form**: Functional contact form with validation
- **Team Section**: Leadership team showcase
- **SEO Optimized**: Proper meta tags and semantic HTML

## Pages

### Home Page (`/`)
- Hero section with company introduction
- Features section highlighting company values
- Statistics section
- Call-to-action sections

### About Us Page (`/about`)
- Company story and background
- Mission and vision statements
- Company values
- Leadership team showcase

### Collection Page (`/collection`)
- Product collections organized by series
- Image galleries for each collection
- Product categories
- Features and benefits

### Contact Page (`/contact`)
- Contact form with validation
- Company contact information
- Business hours
- Social media links
- Google Maps integration

## Technology Stack

- **Backend**: Laravel 12
- **Frontend**: Tailwind CSS 4.0
- **JavaScript**: Vanilla JavaScript for interactions
- **Build Tool**: Vite
- **Font**: Inter (Google Fonts)

## Assets

All images and assets are stored in `storage/app/public/images/` and include:
- Company logos (light and dark versions)
- Background images for each page
- Team member photos
- Product collection images
- Icon assets

## Installation & Setup

1. Install dependencies:
   ```bash
   composer install
   npm install
   ```

2. Create environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. Create storage link:
   ```bash
   php artisan storage:link
   ```

4. Build assets:
   ```bash
   npm run build
   ```

5. Start development server:
   ```bash
   php artisan serve
   ```

## Customization

### Colors
The website uses an orange color scheme (`#f97316`) as the primary color. You can customize this in the Tailwind CSS configuration.

### Images
Replace images in `storage/app/public/images/` with your own:
- `LOGO.png` - Main company logo
- `LOGO FULL.png` - Full company logo for footer
- `HOME BG.png` - Home page background
- `ABOUT US BG.png` - About page background
- `COLLECTION BG.png` - Collection page background
- `CONTACT US BG.png` - Contact page background
- Team member photos (CEO.png, CFO.png, etc.)
- Product images (EAC series)

### Content
Update content in the respective Blade templates:
- `resources/views/home.blade.php`
- `resources/views/about.blade.php`
- `resources/views/collection.blade.php`
- `resources/views/contact.blade.php`

## Contact Form

The contact form includes validation and can be extended to:
- Send emails using Laravel Mail
- Store submissions in database
- Integrate with third-party services

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Performance

- Optimized images
- Minified CSS and JavaScript
- Efficient loading with Vite
- Responsive images

## License

This project is proprietary to Eka Adhikari Cipta.

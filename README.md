# Eka Adhikari Cipta - Company Profile Website

A modern, responsive company profile website built with Laravel 12 and Tailwind CSS 4.0, showcasing the company's products, team, and services.

## 🚀 Features

- **Responsive Design**: Fully responsive design that works seamlessly on all devices
- **Modern UI/UX**: Clean, professional design with smooth animations and transitions
- **Multiple Pages**: Comprehensive page structure including Home, About Us, Collection, and Contact pages
- **Image Gallery**: Extensive showcase of company products and collections
- **Contact Form**: Functional contact form with client-side validation
- **Team Section**: Professional leadership team showcase with profiles
- **SEO Optimized**: Proper meta tags and semantic HTML structure
- **Fast Performance**: Built with Vite for optimized asset compilation

## 📁 Project Structure

```
eka-adhikari-cipta/
├── app/
│   ├── Http/Controllers/     # Laravel controllers
│   ├── Models/               # Database models
│   └── Providers/            # Service providers
├── bootstrap/                # Application bootstrap files
├── config/                   # Configuration files
├── database/                 # Migrations and seeders
├── public/                   # Public assets and entry point
│   ├── fonts/                # Custom fonts
│   └── images/               # Extensive image assets
│       ├── person/           # Team member photos
│       └── product/          # Product images
├── resources/
│   ├── css/                  # Stylesheets
│   ├── js/                   # JavaScript files
│   └── views/                # Blade templates
│       └── layouts/          # Layout components
├── routes/                   # Application routes
├── storage/                  # Storage directory
├── tests/                    # Test files
└── vendor/                   # Composer dependencies
```

## 🛠️ Technology Stack

- **Backend Framework**: Laravel 12
- **Frontend Framework**: Tailwind CSS 4.0
- **JavaScript**: Vanilla JavaScript for interactive elements
- **Build Tool**: Vite 7.0.4
- **PHP Version**: ^8.2
- **Asset Compilation**: Laravel Vite Plugin

## 📄 Pages Overview

### Home Page (`/`)
- Hero section with company introduction and branding
- Features section highlighting company values and offerings
- Statistics and achievements showcase
- Call-to-action sections for user engagement

### About Us Page (`/about`)
- Company story and background information
- Mission and vision statements
- Core company values and principles
- Leadership team showcase with professional profiles

### Collection Page (`/collection`)
- Product collections organized by series (EAC series)
- Comprehensive image galleries for each product category
- Product features and benefits descriptions
- Organized product categorization

### Contact Page (`/contact`)
- Contact form with client-side validation
- Complete company contact information
- Business hours and location details
- Social media integration
- Google Maps integration for location

## 🚀 Installation & Setup

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js (v18 or higher)
- MySQL or compatible database

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd eka-adhikari-cipta
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   Update `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=eka_adhikari_cipta
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Build assets**
   ```bash
   npm run build
   ```

8. **Start development server**
   ```bash
   php artisan serve
   ```

## 🎨 Development

### Development Commands

- **Start development server**: `php artisan serve`
- **Build assets for production**: `npm run build`
- **Watch assets for development**: `npm run dev`
- **Run tests**: `php artisan test`
- **Clear cache**: `php artisan optimize:clear`

### Asset Management

The project uses Vite for asset compilation:
- CSS is managed through Tailwind CSS 4.0
- JavaScript files are in `/resources/js/`
- Blade templates are in `/resources/views/`
- Compiled assets are served from `/public/build/`

## 📦 Dependencies

### PHP Dependencies (via Composer)
- Laravel Framework 12.x
- Laravel Tinker 2.x
- Laravel Sail (dev)
- Laravel Pint (dev)
- PHPUnit (dev)

### JavaScript Dependencies (via npm)
- Tailwind CSS 4.0
- Vite 7.x
- Axios 1.x
- Laravel Vite Plugin 2.x

## 🗃️ Database

The application uses Laravel's Eloquent ORM with database migrations:

- **Users table**: User management and authentication
- **Cache table**: Application caching
- **Jobs table**: Queue job management

Run migrations with: `php artisan migrate`

## 🧪 Testing

The project includes PHPUnit test suites:

- **Feature Tests**: Located in `tests/Feature/`
- **Unit Tests**: Located in `tests/Unit/`

Run tests with: `php artisan test`

## 🔧 Configuration

Key configuration files:

- `config/app.php` - Application settings
- `config/database.php` - Database configuration
- `config/auth.php` - Authentication settings
- `config/cache.php` - Caching configuration
- `vite.config.js` - Vite build configuration

## 📊 Assets

The project includes extensive assets:

- **Images**: Product photos, team member photos, and branding assets
- **Fonts**: Custom typography (29LT Zarid Serif)
- **Icons**: SVG icons and branding elements
- **Styles**: Tailwind CSS with custom configurations

## 🌐 Deployment

### Production Build

1. Build assets for production:
   ```bash
   npm run build
   ```

2. Optimize application:
   ```bash
   php artisan optimize
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. Ensure storage permissions:
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

### Environment Variables

Required environment variables for production:
- `APP_ENV=production`
- `APP_DEBUG=false`
- Database connection details
- Application key (`APP_KEY`)

## 🤝 Contributing

1. Fork the project
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

For support and questions, please contact:
- Email: [contact email]
- Website: [company website]

## 🙏 Acknowledgments

- Laravel Framework
- Tailwind CSS
- Vite Build Tool
- All contributors and team members

---

Built with ❤️ using Laravel and Tailwind CSS
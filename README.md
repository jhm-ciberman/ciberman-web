# Ciberman

Source code for my personal landing page at [ciberman.com](https://ciberman.com). A tiny page listing my indie games.

Built with Laravel 13, Blade components, and Tailwind CSS 4.

## 👨‍💻 Development

1. Clone and install dependencies:

```bash
git clone git@github.com:jhm-ciberman/ciberman-web.git
cd ciberman-web
composer setup
```

2. Start the development server:

```bash
composer dev
```

Then open [http://localhost:8000](http://localhost:8000) in your browser.

## 🧹 Code Style

```bash
./vendor/bin/pint
```

## 🚀 Deployment

Hosted on [Laravel Cloud](https://cloud.laravel.com/). Deploys are driven by GitHub Releases: publishing a release fast-forwards the `production` branch to the tagged commit, which Laravel Cloud picks up and deploys.

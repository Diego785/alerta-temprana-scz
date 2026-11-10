# Disaster Early-Warning System · Web platform

Web platform used to issue, manage and publish disaster alerts for the department of Santa Cruz, Bolivia: forest fires, floods, droughts and other emergencies, with color-coded alert levels for each municipality.

This repository is the web half of the system. The citizen mobile app lives in [hackathon_mobile](https://github.com/Diego785/hackathon_mobile).

## Context

Built in 2023 (March–September) as a software engineer for the Santa Cruz Departmental Government, together with a teammate. The project started at a hackathon and grew into the institution's alert management platform.

## Features

- **Public alert portal.** Alerts grouped by event type, each with its level (Normal, Moderate, Very high, Critical), description, recommendations, source, embedded map, video, images and a link to the official bulletin.
- **Alert issuing.** Technical-scientific units (such as the national weather and hydrology service and the forest-fire early-warning system) issue alerts for one or more municipalities.
- **Push notifications.** When an alert is issued, a "New alert" notification is sent to the mobile app through Firebase Cloud Messaging.
- **Emergency committee.** Committee structure, members and their role in each alert, plus press conferences linked to an alert (spokesperson, institution, video).
- **Management panel.** Alerts, alert levels, municipalities, technical-scientific units, notifications and users, with role-based access (Superadministrator and Administrator).
- **PDF reports.** Alert lists and alert details exported to PDF.
- **REST API for the mobile app.** Alerts, events, municipalities, alert levels, units, alert images and critical alerts, plus an endpoint for the app to upload images.

## Tech stack

Laravel 8 · Livewire 2 · Jetstream (Fortify, Sanctum) · Spatie Laravel Permission · DomPDF · Tailwind CSS · Alpine.js · MySQL · Firebase Cloud Messaging

## How it works

Laravel serves both the public portal and the management panel. Most screens are Livewire components, so lists and forms update without page reloads. Alerts are modeled as an event type plus successive alert issues, each with a level, the affected municipalities and its media. The mobile app consumes the JSON API under `/api`.

## Run locally

```bash
composer install
npm install && npm run dev
cp .env.example .env        # set your MySQL credentials
php artisan key:generate
php artisan migrate --seed  # seeds municipalities, alert levels, units and sample alerts
php artisan serve
```

## Author

Diego Hurtado Vargas · [GitHub](https://github.com/Diego785) · [LinkedIn](https://www.linkedin.com/in/diegohurtadovargas/)

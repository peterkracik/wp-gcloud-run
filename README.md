# Wordpress on Google Cloud Run

## Build and deploy
```bash
gcloud builds submit --tag gcr.io/PROJECT_NAME/IMAGE_NAME // build an image
gcloud run deploy wordpress [--region REGION] --platform managed --image gcr.io/PROJECT_NAME/IMAGE_NAME --set-env-vars DB_NAME=wordpress,DB_USER=root,DB_PASSWORD=mysecretpassword,DB_HOST=database_host --port 80 // deploy to Cloud run
```

Environment variables and port could be set via Cloud Run interface, or pass it via yaml file as `--env-vars-file .env.yaml` (https://cloud.google.com/functions/docs/env-var)

## Setup
- Dockerfile contains oficial PHP image with Apache and configuration for mysql connect and image handling.
- wp-config.php uses environment variables for database parameters instead of hard-coded values
- contains [WP Timeless plugin](https://wordpress.org/plugins/wp-stateless/), which allow us to use Google Cloud Storage instead of local storage


pipeline {
    agent any

    environment {
        APP_NAME = "php-app"
    }

    stages {

        stage('Checkout Code') {
            steps {
                echo "Fetching latest code from GitHub..."
                git 'https://github.com/prajwalmaka/food.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                echo "Building Docker containers..."
                sh 'docker compose build'
            }
        }

        stage('Deploy Application') {
            steps {
                echo "Stopping old containers..."
                sh 'docker compose down'

                echo "Starting new containers..."
                sh 'docker compose up -d'
            }
        }

        stage('Verify Deployment') {
            steps {
                echo "Checking if application is running..."

                sh '''
                sleep 10
                curl -f http://localhost:8081 || exit 1
                '''
            }
        }

        stage('Cleanup Docker Resources') {
            steps {
                echo "Cleaning unused Docker resources..."
                sh 'docker system prune -f'
            }
        }
    }

    post {

        success {
            echo "Application deployed successfully!"
        }

        failure {
            echo "Pipeline failed!"
        }
    }
}

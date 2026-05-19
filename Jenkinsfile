pipeline {
	agent any
	
	stages {
		stage('Clone') {
			steps {
				git 'https://github.com/prajwalmaka/food.git'
			}
		}

		stage('Build Compose Build') {
			steps {
				sh 'docker compose build'
			}
		}
		stage('Deploy Containers') {
			steps {
				sh 'docker compose down || true'
				sh 'docker compose up -d'
			}
		}
	}
}	

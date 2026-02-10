pipeline {
  agent any

  environment {
    AWS_REGION = "eu-west-1"

    
    ECR_REPO   = "597765856364.dkr.ecr.eu-west-1.amazonaws.com/custom-wordpress"

    ASG_NAME   = "wp-asg"

    // Можно оставить latest, или делать tag по коммиту
    IMAGE_TAG  = "latest"
  }

  stages {
    stage('Checkout') {
      steps { checkout scm }
    }

    stage('Build image') {
      steps {
        sh """
          set -eux
          docker build -t custom-wordpress:${IMAGE_TAG} .
        """
      }
    }

    stage('Login & Push to ECR') {
      steps {
        sh """
          set -eux

          aws sts get-caller-identity

          aws ecr get-login-password --region ${AWS_REGION} | \
            docker login --username AWS --password-stdin $(echo ${ECR_REPO} | cut -d/ -f1)

          docker tag custom-wordpress:${IMAGE_TAG} ${ECR_REPO}:${IMAGE_TAG}
          docker push ${ECR_REPO}:${IMAGE_TAG}
        """
      }
    }

    stage('ASG Instance Refresh') {
      steps {
        sh """
          set -eux
          aws autoscaling start-instance-refresh \
            --auto-scaling-group-name ${ASG_NAME} \
            --preferences MinHealthyPercentage=50,InstanceWarmup=180
        """
      }
    }
  }
}

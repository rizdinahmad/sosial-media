pipeline {
	agent any
	stages {
		stage("build") {
			steps {
			sh "docker build --build-arg APP_NAME=$DOCKER_IMAGE_NAME -t $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER ."
			}
		}
		stage("push") {
			sh "docker push $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER"
			steps {
			}
		}
		stage("deploy") {
			sh('kubectl apply -f staging-sosmed.yml')
			steps {
			}
		}
	}
}

node {

}

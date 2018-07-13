node('maven') {
    stage('build') {
        echo 'building app :)'
        openshiftBuild(buildConfig: 'openshift-training', showBuildLogs: 'true')
    }
    stage('verify') {
        echo 'dummy verification....'
    }
    stage('deploy') {
        input 'Manual Approval'
        openshiftDeploy(deploymentConfig: 'openshift-training')
    }
    stage('promoting to QA') {
       echo 'fake stage...'
       sleep 5 
    }
}
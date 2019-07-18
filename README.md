# ORDatWork

The United States Environmental Protection Agency (EPA) GitHub project code is provided on an "as is" basis and the user assumes responsibility for its use.  EPA has relinquished control of the information and no longer has responsibility to protect the integrity , confidentiality, or availability of the information.  Any reference to specific commercial products, processes, or services by service mark, trademark, manufacturer, or otherwise, does not constitute or imply their endorsement, recommendation or favoring by EPA.  The EPA seal and logo shall not be used in any manner to imply endorsement of any commercial product or activity by EPA or the United States Government.

## Initial Setup

### Git initialization and dependency installation
1. From command line, run command  `git clone https://github.com/USEPA/ORDatWork.git`. If using [Acquia Dev Desktop (ADD)](https://dev.acquia.com/downloads), have the repository cloned inside `~Sites/devdesktop`
2. If required, enter git username/email and password when prompted.
3. `cd ORDatWork` -- Navigate into the cloned git repo 
4. `git checkout -b origin/development` -- checkout the development branch
5. `composer install` -- install all dependencies for the project. This can take some time.
    * For a Windows environment, this must be done in a BASH command line. Try GIT bash, included with the GIT installation, or Ubuntu Bash, new to Windows 10. 


### [Acquia Dev Desktop (ADD)](https://dev.acquia.com/downloads)
1. Open ADD
2. Click the **+** button from the bottom left corner
3. Select *Import local Drupal site...*
4. Set the *Local codebase folder* to the location you just cloned the repo to `~Sites\devdesktop\ORDatWork`
5. Set the *Local site name* to ORDatWork
6. Change the PHP version to 7.2.18 (or 7.3.x when ADD supports that)
7. Click **OK**
8. Once the site has been created in ADD, click on the local site URL to view the site in your browser.

#### Setup your config sync folder for ADD
1. Create a 'sync' folder at 'site/default/files/config_your_config_folder_name' path.
2. Update your settings.php file in the *Location of the site configuration files.* area with the following:

   ` $config_directories = [
      CONFIG_SYNC_DIRECTORY => 'sites/default/files/config_your_config_folder_name/sync',
    ];`

3. Check your sites Status Report page (/admin/reports/status#error) to ensure the error the sync error is not there.

## Feature Development

### Developing new feature
1. If contributing to the project, first ensure you have your development environment set up. Use Acquia Dev Desktop (below), then read through system-requirements for dependency installation.
2. When working on a new feature, you must create a new GIT branch from the remote development branch. No branches can be made from staging or master. To create a new branch from development, do the following:
    1. `git fetch` -- updates your local GIT with the latest details from the remote.
    2. `git checkout -b [name of your feature branch] origin/development` -- This creates a new branch with the latest from origin/development.
    3. The git checkout command above will also point your repo to the new branch.
 3. Before starting work on your new branch, you must install any updates from the development branch. This can be dependencies in composer.json, or new configurations that manage the Drupal projects structure.
    1. `composer install` -- Update your dependencies with latest changes
    2. It's possible the a dependency was removed from composer.json and your project must be updated. If this is the case, you will be prompted after running `composer install` to run `composer update`. This will only remove the dependencies from your local project. Do not run `composer update` otherwise. 
    3. `drush config:import` -- Updates your Drupal Database with the last configuration changes. It will prompt you to confirm the configurations being imported. Type `y` and enter.   

### Committing and pushing code
1. While developing, it is good practice to commit and push your code often. 
2. Run `git add .` from project root to stage all changes. If you have files that should not be added, isolate your addition commands to specific files or directories. For example:
    1. `git add README.md` from project root.
    2. `git add config/` stages the entire directory
3. Run `git commit -m "Short and descriptive commit message"`, with a commit message that describes the work completed.
4. Before pushing your code, it is good practice to pull the latest changes from development. This makes sure you are up to date and not accidentally overwriting another developers code.
    1. Run `git pull origin development`
    2. This pulls the latest code from development branch and merges into your local branch. As long as there are not merge conflicts, you are ready to continue deploying your code.
4. Run `git push`. If this is the first time pushing a new branch, you will be prompted to run `git push --set-upstream origin [local branch name]`. This will create a new branch in the remote repo with your changes. Afterwards you only need to run `git push` to update your branch.

### Deploying a new feature
1. After finishing a feature locally, you must deploy to the repo and create a pull request (PR). Before deploying, you must update any changed configurations.
2. Run `drush config:export` or `drush cex` to take your local Drupal configurations and store them in code.
3. Follow the [steps on committing and pushing code](#committing-and-pushing-code) to deploy the configuration changes to your remote branch. 
4. In Github, create a pull request from your branch to merge into development. 
    1. Select your branch in the branch dropdown.
    2. Click "New pull request"
    3. In the "base" dropdown, select "development"
    3. Add any additional information needed in text field.
    4. Click "Create pull request"
5. Once pull request is approved, it can be merged into development by clicking "Merge pull request".
    

<?php
include "config.php";
?>
<!-- Introduction -->
<div class="row">
  <article class="col-xs-12 col-lg-10 col-lg-offset-1">
    <p>
      <h2>Karat Planning Poker Online</h2>
      Welcome to the Karat Planning Poker (KPP) web app. From this screen you can create or join an existing session. 
    </p>
  </article>
</div>

<!-- todo : make dynamic so if we have id we just join, else we present as is -->

<div class="row">
  <?php 
    $isCreateJoinMode = !isset($_GET['id']); 
    if($isCreateJoinMode){ 
      echo "<h2 class=\"col-xs-12 col-lg-10 col-lg-offset-1\">Create or join a session</h2>";
    }else{
      echo "<h2 class=\"col-xs-12 col-lg-10 col-lg-offset-1\">Join a session</h2>";
    }  
  ?>
  <?php
    if($isCreateJoinMode){
  ?>
  <!-- Create session panel -->
  <div class="col-xs-12 col-sm-6 col-lg-5 col-lg-offset-1" ng-controller="CreateController as create">
    <div class="panel panel-default">
      <div class="panel-heading">Create session</div>
      <div class="panel-body">  
        <form role="form">
          <div class="form-group" ng-class="{'has-error': create.nameError}">
            <label for="sessionName">Session name:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" ng-model="create.name" placeholder="My session">
              <span ng-if="create.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group">
            <label>Cards: <a target="_blank" href="<?= $src ?>/src/sample-config.php#L17">?</a></label>
            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                <span ng-bind-html="create.selectedSet.value"></span>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li ng-repeat="set in create.cardSets" ng-class="{'active': set == create.selectedSet}">
                  <a class="selectable" ng-click="create.selectedSet = set" ng-bind-html="set.value"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="form-group">
            <label><input type="checkbox" ng-model="create.isPrivate"> is private</label> 
          </div>
          <div class="form-group" ng-if="create.isPrivate" ng-class="{'has-error': create.pwdError}">
            <label for="password">Password:</label>
            <div class="has-feedback">
              <input type="password" class="form-control" ng-model="create.password">
              <span ng-if="create.pwdError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="Create" ng-click="create.createSession()">
        </form>
      </div>
    </div>        
  </div>
  <!-- Join session panel -->
  <div class="col-xs-12 col-sm-6 col-lg-5" ng-controller="JoinController as join">
    <div class="panel panel-default">
      <div class="panel-heading">Join session</div>
      <div class="panel-body">
        <form role="form">
          <div class="form-group" ng-class="{'has-error': join.idError}">
            <label>Session id:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" ng-model="join.id" ng-change="join.passwordCheck()" ng-init="join.passwordCheck()" placeholder="4711">
              <span ng-if="join.idError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" ng-class="{'has-error': join.nameError}">
            <label>Your name:</label>
            <div class="has-feedback" ng-init="join.name = '<?= isset($_COOKIE['scrum_member_name']) ? $_COOKIE['scrum_member_name'] : "" ?>'">
              <input type="text" class="form-control"  ng-model="join.name" placeholder="John">
              <span ng-if="join.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" ng-if="join.requiresPassword">
            <label>Password:</label>
            <div class="has-feedback">
              <input type="password" class="form-control"  ng-model="join.password">
              <span ng-if="join.passwordError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="Join" ng-click="join.joinSession()">
       </form>
      </div>
    </div>        
  </div>
  <?php }else{ ?>  
  <!-- Join session panel -->
  <div class="col-xs-12 col-sm-6 col-lg-5 col-lg-offset-1" ng-controller="JoinController as join">
    <div class="panel panel-default">
      <div class="panel-heading">Join session</div>
      <div class="panel-body">
        <form role="form">
          <div class="form-group" ng-class="{'has-error': join.idError}">
            <label>Session id:</label>
            <div class="has-feedback">
              <input type="text" class="form-control" ng-model="join.id" ng-change="join.passwordCheck()" placeholder="4711">
              <span ng-if="join.idError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" ng-class="{'has-error': join.nameError}">
            <label>Your name:</label>
            <div class="has-feedback" ng-init="join.name = '<?= isset($_COOKIE['scrum_member_name']) ? $_COOKIE['scrum_member_name'] : "" ?>'">
              <input type="text" class="form-control"  ng-model="join.name" placeholder="John">
              <span ng-if="join.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group" ng-if="join.requiresPassword">
            <label>Password:</label>
            <div class="has-feedback">
              <input type="password" class="form-control"  ng-model="join.password">
              <span ng-if="join.passwordError" class="glyphicon glyphicon-remove form-control-feedback"></span>
            </div>
          </div>
          <input type="button" class="btn btn-default" value="Join" ng-click="join.joinSession()">
       </form>
      </div>
    </div>        
  </div>
  <?php } ?>
</div>

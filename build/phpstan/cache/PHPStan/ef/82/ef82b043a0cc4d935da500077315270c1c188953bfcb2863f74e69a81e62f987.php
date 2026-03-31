<?php declare(strict_types = 1);

// odsl-/var/www/html/src
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v1-enums',
   'data' => 
  array (
    '/var/www/html/src/Models/FormTemplate.php' => 
    array (
      0 => '092a8d6c2b383ff3eab56743899e2808fb6c421e83becbb3dbe35524f48e9648',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\formtemplate',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\casts',
        1 => 'robinsonryan\\formflow\\models\\gettable',
        2 => 'robinsonryan\\formflow\\models\\flow',
        3 => 'robinsonryan\\formflow\\models\\steps',
        4 => 'robinsonryan\\formflow\\models\\responses',
        5 => 'robinsonryan\\formflow\\models\\isactive',
        6 => 'robinsonryan\\formflow\\models\\isdraft',
        7 => 'robinsonryan\\formflow\\models\\activate',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Models/FormTemplateStep.php' => 
    array (
      0 => '081aaaeb8b99e4885fed67867c45e52f9ad74f587b30a6fbe5b9c5601acce0f7',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\formtemplatestep',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\casts',
        1 => 'robinsonryan\\formflow\\models\\gettable',
        2 => 'robinsonryan\\formflow\\models\\template',
        3 => 'robinsonryan\\formflow\\models\\slot',
        4 => 'robinsonryan\\formflow\\models\\isvisiblefor',
        5 => 'robinsonryan\\formflow\\models\\getlaravelvalidationrules',
        6 => 'robinsonryan\\formflow\\models\\buildfieldrules',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Models/Flow.php' => 
    array (
      0 => '5f0f951bf09982d4fcd7c330c67ce9738b4b56bf1b669ced50984e69b156df52',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\flow',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\casts',
        1 => 'robinsonryan\\formflow\\models\\gettable',
        2 => 'robinsonryan\\formflow\\models\\steps',
        3 => 'robinsonryan\\formflow\\models\\slots',
        4 => 'robinsonryan\\formflow\\models\\templates',
        5 => 'robinsonryan\\formflow\\models\\responses',
        6 => 'robinsonryan\\formflow\\models\\isglobal',
        7 => 'robinsonryan\\formflow\\models\\istenant',
        8 => 'robinsonryan\\formflow\\models\\isactive',
        9 => 'robinsonryan\\formflow\\models\\isdraft',
        10 => 'robinsonryan\\formflow\\models\\activate',
        11 => 'robinsonryan\\formflow\\models\\archive',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Models/FlowStep.php' => 
    array (
      0 => 'b0cf33deafdfea6b920fdb465dc6fa7387c675b3b1e6deee4bcbb98192b7d024',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\flowstep',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\casts',
        1 => 'robinsonryan\\formflow\\models\\gettable',
        2 => 'robinsonryan\\formflow\\models\\flow',
        3 => 'robinsonryan\\formflow\\models\\isvisiblefor',
        4 => 'robinsonryan\\formflow\\models\\isalwaysvisible',
        5 => 'robinsonryan\\formflow\\models\\iscustomeronly',
        6 => 'robinsonryan\\formflow\\models\\isapplicantonly',
        7 => 'robinsonryan\\formflow\\models\\isconditional',
        8 => 'robinsonryan\\formflow\\models\\getlaravelvalidationrules',
        9 => 'robinsonryan\\formflow\\models\\buildfieldrules',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Models/FlowResponse.php' => 
    array (
      0 => '495745e19f2250070484aca80f42ca6cc9aaf35d449b1e04484e2a7800182c71',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\flowresponse',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\casts',
        1 => 'robinsonryan\\formflow\\models\\gettable',
        2 => 'robinsonryan\\formflow\\models\\flow',
        3 => 'robinsonryan\\formflow\\models\\template',
        4 => 'robinsonryan\\formflow\\models\\subject',
        5 => 'robinsonryan\\formflow\\models\\isinprogress',
        6 => 'robinsonryan\\formflow\\models\\isawaitingapplicant',
        7 => 'robinsonryan\\formflow\\models\\iscompleted',
        8 => 'robinsonryan\\formflow\\models\\isexpired',
        9 => 'robinsonryan\\formflow\\models\\iscancelled',
        10 => 'robinsonryan\\formflow\\models\\isterminal',
        11 => 'robinsonryan\\formflow\\models\\cantransitionto',
        12 => 'robinsonryan\\formflow\\models\\setstepresponse',
        13 => 'robinsonryan\\formflow\\models\\getstepresponse',
        14 => 'robinsonryan\\formflow\\models\\markstepcompleted',
        15 => 'robinsonryan\\formflow\\models\\isstepcompleted',
        16 => 'robinsonryan\\formflow\\models\\getcompletedstepkeys',
        17 => 'robinsonryan\\formflow\\models\\handofftoapplicant',
        18 => 'robinsonryan\\formflow\\models\\resumebyapplicant',
        19 => 'robinsonryan\\formflow\\models\\complete',
        20 => 'robinsonryan\\formflow\\models\\cancel',
        21 => 'robinsonryan\\formflow\\models\\expire',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Models/FlowSlot.php' => 
    array (
      0 => '8d281e2bf93d40b6da03ac3e76427d6ed90c6195cdb7fcfa63c97d63fcbad1e9',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\flowslot',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\models\\casts',
        1 => 'robinsonryan\\formflow\\models\\gettable',
        2 => 'robinsonryan\\formflow\\models\\flow',
        3 => 'robinsonryan\\formflow\\models\\templatesteps',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Enums/ActorType.php' => 
    array (
      0 => '5cf727fec7d09b46c35753f2c5cbd153c7a5aac2aacb36b6a814f563237831f3',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\actortype',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\label',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Enums/ResponseStatus.php' => 
    array (
      0 => '3e7c2b808b34161566382950f60beb7cbbb47da85a8057541396134a7c7c4e0c',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\responsestatus',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\label',
        1 => 'robinsonryan\\formflow\\enums\\isterminal',
        2 => 'robinsonryan\\formflow\\enums\\cantransitionto',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Enums/VisibilityMode.php' => 
    array (
      0 => 'c32ee55320db5165f90a5368d5fbb749ccbcabba16c0c0f9b13aba2a82ae0868',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\visibilitymode',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\isvisiblefor',
        1 => 'robinsonryan\\formflow\\enums\\label',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Enums/FlowStatus.php' => 
    array (
      0 => '34ddd48d2953bf61f8c362dd830dcfbee28212e486a7215d3ad8d311756ed30d',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\flowstatus',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\label',
        1 => 'robinsonryan\\formflow\\enums\\isusable',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Enums/OwnerScope.php' => 
    array (
      0 => '943ebe8e10c27648200b55db85b81e5a7bcdf29b394262bc95fcd3ecc7848c42',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\ownerscope',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\enums\\label',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Contracts/FlowManagerInterface.php' => 
    array (
      0 => '2a75cba97ca4a500ae9172833b6478586f77af0730072cddada61aa7b9d524d5',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\contracts\\flowmanagerinterface',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\contracts\\getflow',
        1 => 'robinsonryan\\formflow\\contracts\\gettemplate',
        2 => 'robinsonryan\\formflow\\contracts\\getsteps',
        3 => 'robinsonryan\\formflow\\contracts\\getstepsforactor',
        4 => 'robinsonryan\\formflow\\contracts\\startflow',
        5 => 'robinsonryan\\formflow\\contracts\\validatestep',
        6 => 'robinsonryan\\formflow\\contracts\\submitstep',
        7 => 'robinsonryan\\formflow\\contracts\\handoff',
        8 => 'robinsonryan\\formflow\\contracts\\resume',
        9 => 'robinsonryan\\formflow\\contracts\\complete',
        10 => 'robinsonryan\\formflow\\contracts\\cancel',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Contracts/StepValidatorInterface.php' => 
    array (
      0 => '227738a074d56273613141859098ce995f6dcb51dc0897ca9e1b8b2d90de09ed',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\contracts\\stepvalidatorinterface',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\contracts\\validate',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Contracts/StepResolverInterface.php' => 
    array (
      0 => '011356bdae805fc6646394b410df58921d74402a2fc3040f338d84f1dc21edb8',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\contracts\\stepresolverinterface',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\contracts\\resolvesteps',
        1 => 'robinsonryan\\formflow\\contracts\\resolvestepsforactor',
        2 => 'robinsonryan\\formflow\\contracts\\resolvestep',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Services/StepResolver.php' => 
    array (
      0 => 'da1de57acafe91211922db64371021a7bafffa7ab2e6082cde09c42da4ca5894',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\services\\stepresolver',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\services\\resolvesteps',
        1 => 'robinsonryan\\formflow\\services\\resolvestepsforactor',
        2 => 'robinsonryan\\formflow\\services\\resolvestep',
        3 => 'robinsonryan\\formflow\\services\\isstepvisibleforcontext',
        4 => 'robinsonryan\\formflow\\services\\evaluateconditionalvisibility',
        5 => 'robinsonryan\\formflow\\services\\evaluatecondition',
        6 => 'robinsonryan\\formflow\\services\\insertslotsbeforeposition',
        7 => 'robinsonryan\\formflow\\services\\insertremainingslots',
        8 => 'robinsonryan\\formflow\\services\\insertslotsteps',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Services/Validation/HybridStepValidator.php' => 
    array (
      0 => '7dc944a95b500935774ce9b87f1a72c4e91233c5b72ef3c654bca0c5ae7cf593',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\services\\validation\\hybridstepvalidator',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\services\\validation\\__construct',
        1 => 'robinsonryan\\formflow\\services\\validation\\validate',
        2 => 'robinsonryan\\formflow\\services\\validation\\validatewithlaravel',
        3 => 'robinsonryan\\formflow\\services\\validation\\validatewithjsonschema',
        4 => 'robinsonryan\\formflow\\services\\validation\\buildlaravelrules',
        5 => 'robinsonryan\\formflow\\services\\validation\\buildfieldrules',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Services/Validation/OpisJsonSchemaValidator.php' => 
    array (
      0 => '1ab627f9a2f53a1a95bc12b528f9739df1a023f41d31a094bf0eb2a3854171f3',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\services\\validation\\opisjsonschemavalidator',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\services\\validation\\__construct',
        1 => 'robinsonryan\\formflow\\services\\validation\\validate',
        2 => 'robinsonryan\\formflow\\services\\validation\\extracterrorfromopiserror',
        3 => 'robinsonryan\\formflow\\services\\validation\\mapopisformattederrors',
        4 => 'robinsonryan\\formflow\\services\\validation\\safejsonencode',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Services/FlowManager.php' => 
    array (
      0 => '9f19c84858eb2ffb0aa8e4a568a7a8c98347081977556138e07d35aeec2fc25c',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\services\\flowmanager',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\services\\__construct',
        1 => 'robinsonryan\\formflow\\services\\getflow',
        2 => 'robinsonryan\\formflow\\services\\gettemplate',
        3 => 'robinsonryan\\formflow\\services\\getsteps',
        4 => 'robinsonryan\\formflow\\services\\getstepsforactor',
        5 => 'robinsonryan\\formflow\\services\\startflow',
        6 => 'robinsonryan\\formflow\\services\\validatestep',
        7 => 'robinsonryan\\formflow\\services\\submitstep',
        8 => 'robinsonryan\\formflow\\services\\handoff',
        9 => 'robinsonryan\\formflow\\services\\resume',
        10 => 'robinsonryan\\formflow\\services\\complete',
        11 => 'robinsonryan\\formflow\\services\\cancel',
        12 => 'robinsonryan\\formflow\\services\\areallstepscompleted',
        13 => 'robinsonryan\\formflow\\services\\getnextstep',
        14 => 'robinsonryan\\formflow\\services\\getprogress',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Data/ResolvedStep.php' => 
    array (
      0 => '61656619d0ea91d44c82e73433690b702abcab5e74c5805a996ee2c7c1acd9c8',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\data\\resolvedstep',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\data\\__construct',
        1 => 'robinsonryan\\formflow\\data\\fromflowstep',
        2 => 'robinsonryan\\formflow\\data\\fromtemplatestep',
        3 => 'robinsonryan\\formflow\\data\\isfromflow',
        4 => 'robinsonryan\\formflow\\data\\isfromtemplate',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Data/StepFilterContext.php' => 
    array (
      0 => '5d8a06519efec4197c3af98249c371f458542cb61ce22d3eb912adda1f2a8d99',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\data\\stepfiltercontext',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\data\\__construct',
        1 => 'robinsonryan\\formflow\\data\\iscustomer',
        2 => 'robinsonryan\\formflow\\data\\isapplicant',
        3 => 'robinsonryan\\formflow\\data\\get',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Data/ValidationErrorData.php' => 
    array (
      0 => '7c11261012ffb90e67449165a3f553e1c63f83c8454cdbbfa718b9911de05d43',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\data\\validationerrordata',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\data\\__construct',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Data/ValidationResultData.php' => 
    array (
      0 => '57e30da707b3f886fbb981a9976c19a4463eee1cd82b604cfbe9b119fbb14bf5',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\data\\validationresultdata',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\data\\__construct',
        1 => 'robinsonryan\\formflow\\data\\success',
        2 => 'robinsonryan\\formflow\\data\\failure',
        3 => 'robinsonryan\\formflow\\data\\isvalid',
        4 => 'robinsonryan\\formflow\\data\\isinvalid',
        5 => 'robinsonryan\\formflow\\data\\tovalidationmessages',
        6 => 'robinsonryan\\formflow\\data\\pathtofield',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Traits/HasConfigurableUuid.php' => 
    array (
      0 => '71024d72fb6e0942d7fba425e46b7c0bd29604b7289507ce799bce8d2f60d196',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\traits\\hasconfigurableuuid',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\traits\\getincrementing',
        1 => 'robinsonryan\\formflow\\traits\\getkeytype',
        2 => 'robinsonryan\\formflow\\traits\\boothasconfigurableuuid',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/html/src/Facades/FormFlow.php' => 
    array (
      0 => '7d540ba21bf2122c271619d5894b817b5aa7844e3797fadaed31ace4f0f7fe82',
      1 => 
      array (
        0 => 'robinsonryan\\formflow\\facades\\formflow',
      ),
      2 => 
      array (
        0 => 'robinsonryan\\formflow\\facades\\getfacadeaccessor',
      ),
      3 => 
      array (
      ),
    ),
  ),
));
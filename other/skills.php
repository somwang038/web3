<?php
    include 'head.php';
?>

<div class="container">
    
    <div class="row">
      <div class="page-header" id="banner">
      </div>
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="type">ความสามารถต่อสู้</h1>
        </div>
      </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
           <div class="bs-component">
              <table class="table table-bordered table-hover ">
                <thead>
                    <tr class="success">
                      <th style="width: 7%; text-align: center;">รูปภาพ</th>
                      <th style="width: 20%; text-align: center;">ความสามารถ</th>
                      <th style="width: 41%; text-align: center;">รายละเอียด</th>
                      <th style="width: 32%; text-align: center;">การกระตุ้น</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="warning">
                        <td align="center"> <img src="../image/Ts/Earthsaint.gif" border="0"></td>
                      <td>Earth Saint</td>
                      <td>When activated, the user performs a
                critical hit that negates Terrain effects.</td>
                      <td>(User's Skill - Enemy's Skill) +3%</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Heavensaint.gif" border="0"></td>
                      <td>Heaven Saint</td>
                      <td>When activated, damage done to the
                enemy is used to restore user's HP.</td>
                      <td>(User's Skill - Enemy's Skill) +3%</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Lifeordeath.gif" border="0"></td>
                      <td>Life or Death</td>
                      <td>As user's HP goes down, their
                critical rate rises.</td>
                      <td>(100 - [HP x 100 / MHP])%</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Dragonsaint.gif" border="0"></td>
                      <td>Dragon Saint</td>
                      <td>When activated, the user performs a
                5-hit attack on the enemy.</td>
                      <td>(User's Skill - Enemy's Skill) +3%</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Geomancy.gif" border="0"></td>
                      <td>Geomancy</td>
                      <td>When activated, the user's attack
                negates the enemy's Defence/Magic.</td>
                      <td>(User's Skill - Enemy's Skill) +3%</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Gale.gif" border="0"></td>
                      <td>Gale</td>
                      <td>If the user is faster than the
                enemy, they will always strike first in combat.</td>
                      <td>-</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Blazingwind.gif" border="0"></td>
                      <td>Blazing Wind</td>
                      <td>When activated the user KOs the
                enemy (enemy must have low HP and range of attack must be 1)</td>
                      <td>(User's Skill - Enemy's Skill) +3%</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Continue.gif" border="0"></td>
                      <td>Continue</td>
                      <td>When activated, the user performs a
                2-hit attack on the enemy</td>
                      <td>(User's Speed)%</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Risingdragon.gif" border="0"></td>
                      <td>Rising Dragon</td>
                      <td>When activated, the user performs an attack that does triple
                damage (range of attack must be 1)</td>
                      <td>(User's Skill - Enemy's Skill) +3%</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/BigShield.gif" border="0"></td>
                      <td>Big Shield</td>
                      <td>When activated, the user's Defence
                is increased by 20 for one of the enemy's attacks</td>
                      <td>(User's Level)%</td>
                    </tr>
                  </tbody>
              </table> 
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="type">ความสามารถอื่นๆ</h1>
        </div>
      </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
           <div class="bs-component">
              <table class="table table-bordered table-hover ">
                <thead>
                    <tr class="success">
                      <th style="width: 7%; text-align: center;">รูปภาพ</th>
                      <th style="width: 20%; text-align: center;">ความสามารถ</th>
                      <th style="width: 73%; text-align: center;">รายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Mug.gif" border="0"></td>
                      <td>Mug</td>
                      <td>User can steal an item from the
                enemy. However it reduces the Accuracy and Avoid of all allies
                within a 3 square radius</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Steal.gif" border="0"></td>
                      <td>Steal</td>
                      <td>During battles, the user can steal
                an item from the enemy. Chance of success is equal to: (User's Speed +
                Skill)%</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Awareness.gif" border="0"></td>
                      <td>Awareness</td>
                      <td>Negates all Skills other than Mug,
                Steal and Elite.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Elite.gif" border="0"></td>
                      <td>Elite</td>
                      <td>Doubles EXP received</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Remove.gif" border="0"></td>
                      <td>Re-Move</td>
                      <td>The user can use up left-over
                movement after attacking.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Transform.gif" border="0"></td>
                      <td>Transform</td>
                      <td>The user can change form into one of
                the units adjacent to them.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Charge.gif" border="0"></td>
                      <td>Charge</td>
                      <td>When used, activates 2~5 rounds of
                battle. Can only be used if the user's Speed is greater than the
                enemy's.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Dance.gif" border="0"></td>
                      <td>Dance</td>
                      <td>When used, has a good chance of
                allowing an ally to move again.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Song.gif" border="0"></td>
                      <td>Song</td>
                      <td>Restores HP of allies and may allow
                them to move again. Range of effect grows from 1 to 4.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Warp.gif" border="0"></td>
                      <td>Warp</td>
                      <td>Teleports user to a traversable
                square on the map, and allows them to perform standard actions
                afterwards.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Summon.gif" border="0"></td>
                      <td>Summon</td>
                      <td>User can use special staves to
                summon allied monsters on the field.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Picklock.gif" border="0"></td>
                      <td>Picklock</td>
                      <td>User can open normal doors or chests
                without keys.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Antievil.gif" border="0"></td>
                      <td>Anti-Evil</td>
                      <td>Increases user's battle stats when
                fighting monsters.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Charisma.gif" border="0"></td>
                      <td>Charisma</td>
                      <td>Increases accuracy and evade of all
                allies within a 3 square radius.</td>
                    </tr>
                  </tbody>
              </table> 
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="type">ความสามารถภูมิประเทศอื่นๆ</h1>
        </div>
      </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
           <div class="bs-component">
              <table class="table table-bordered table-hover ">
                <thead>
                    <tr class="success">
                      <th style="width: 7%; text-align: center;">รูปภาพ</th>
                      <th style="width: 20%; text-align: center;">ความสามารถ</th>
                      <th style="width: 73%; text-align: center;">รายละเอียด</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Forest.gif" border="0"></td>
                      <td>Forest Fighter</td>
                      <td>In forest maps, raises accuracy and
                evade by 10% and boosts movement by 1.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Plains.gif" border="0"></td>
                      <td>Plains Fighter</td>
                      <td>In plains maps, raises accuracy and
                evade by 10% and boosts movement by 1.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Mountain.gif" border="0"></td>
                      <td>Mountain Fighter</td>
                      <td>In mountain maps, raises accuracy
                and evade by 10% and boosts movement by 1.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Sea.gif" border="0"></td>
                      <td>Sea Fighter</td>
                      <td>In sea maps, raises accuracy and
                evade by 10% and boosts movement by 1.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Frontier.gif" border="0"></td>
                      <td>Frontier Fighter</td>
                      <td>In frontier maps, raises accuracy
                and evade by 10% and boosts movement by 1. Also prevents taking damage
                in swamps.<br>
                      </td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/City.gif" border="0"></td>
                      <td>City Fighter</td>
                      <td>In city maps, raises accuracy and
                evade by 10% and boosts movement by 1.</td>
                    </tr>
                    <tr class="warning">
                      <td align="center"> <img src="../image/Ts/Arena.gif" border="0"></td>
                      <td>Arena Fighter</td>
                      <td>When fighting in the arena, boosts
                accuracy and evade by 20%</td>
                    </tr>
                  </tbody>
              </table> 
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12" style="text-align: center;">
           <a class="btn btn-primary btn-lg" href="">กลับไปข้างบน</a>
        </div>
    </div>
    
    <br>
    
</div>
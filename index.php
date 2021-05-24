<?php Echo '<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apollo 15</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/css/uikit.min.css">
  <link rel="stylesheet" type="text/css" href="/themes/bigpicture/css/aos-2.3.4.css">
  <link rel="stylesheet" href="/themes/bigpicture/css/main.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=IM+Fell+DW+Pica:ital@1&family=IM+Fell+English:ital@1&display=swap"
    rel="stylesheet">
</head>

<body>
  <!-- <div uk-grid class="uk-grid" style="position: relative; z-index: 10;" >

  </div> -->

  <div id="content">
    <section class="uk-child-width-1-1 uk-margin-remove uk-text-center ap-intro" uk-grid>
      <div class="uk-flex-row a15-landing-section">
        <nav class="uk-navbar-container uk-padding ap-nav ap-z-index" uk-navbar
          style="background: none; overflow: hidden;">
          <div class="uk-hidden@m" uk-toggle="target: #offcanvas-nav">
            <span class="ap-menu-item ap-logo ap-button uk-text-uppercase"> <span uk-icon="menu"></span> The Apollo 15
              Learning Hub</span>
          </div>
          <div id="offcanvas-nav" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar">
              <ul class="uk-nav uk-nav-default">
                <li><a class="ap-menu-item" href="#flight-path">Flight Path</a></li>
                <li><a class="ap-menu-item"
                    href="https://readux.io/collection/apollo-15/">Data
                    File</a></li>
                <li><a class="ap-menu-item" href="https://apollo15hub.org/items/browse">Exhibition</a></li>
                <li><a class="ap-menu-item" href="https://apollo15hub.org/lunarmodule">Inside the Ship</a></li>
                <li><a class="ap-menu-item" href="https://apollo15hub.org/about">About</a></li>
              </ul>
            </div>
          </div>
          <div class="uk-navbar-left uk-visible@m">
            <ul class="uk-navbar-nav">
              <li>
                <a href="/" class="ap-menu-item uk-visible@m">
                  <ul class="uk-list ap-logo uk-visible@m">
                    <li>The Apollo 15 Learning Hub</li>
                  </ul>
                </a>
              </li>
            </ul>
          </div>
          <div class="uk-navbar-right uk-visible@m">
            <ul class="uk-navbar-nav">
              <li><a class="ap-menu-item" href="#flight-path">Flight Path</a></li>
              <li><a class="ap-menu-item"
                  href="https://readux.io/collection/apollo-15/">Data File</a></li>
              <li><a class="ap-menu-item" href="https://apollo15hub.org/items/browse">Exhibition</a></li>
              <li><a class="ap-menu-item" href="https://apollo15hub.org/lunarmodule">Inside the Ship</a></li>
              <li><a class="ap-menu-item" href="https://apollo15hub.org/about">About</a></li>
            </ul>
          </div>
        </nav>

        <div class="ap-site-msg-container uk-margin-large">
          <div class="ap-site-msg-heading">
            Welcome to the Apollo 15 Learning Hub
          </div>
          <div class="ap-site-msg-body">
            A project to assemble, preserve, and make available primary source records of Apollo 15 for research,
            education, and
            preservation as an example of a unique human endeavor.
          </div>
        </div>

        <div class="ap-site-scroll-container uk-margin-large">
          Scroll down to take the flight path and explore
        </div>

        <div class="ap-site-logo-container uk-container uk-margin-large">

          <div class="uk-child-width-1-3@m grid-collapse" uk-grid>
            <a href="#flight-path" class="ap-home-card ap-z-index">
              <div class="uk-inline a15-card ">
                <img src="/themes/bigpicture/images/flight-path-1.jpg" alt="">
                <!-- <div class="uk-overlay-primary uk-position-cover"></div> -->
                <div class="uk-overlay uk-overlay-default uk-position-bottom a15-overlay">
                  <p>Flight Path</p>
                </div>
              </div>
            </a>
            <a href="https://readux.io/collection/apollo-15/"
              class="ap-home-card ap-z-index">
              <div class="uk-inline a15-card">
                <img src="/themes/bigpicture/images/manual-1.jpg" alt="">
                <!-- <div class="uk-overlay-primary uk-position-cover"></div> -->
                <div class="uk-overlay uk-overlay-default uk-position-bottom a15-overlay">
                  <p>Manual</p>
                </div>
              </div>
            </a>
            <a href="https://apollo15hub.org/lunarmodule" class="ap-home-card ap-z-index">
              <div class="uk-inline a15-card">
                <img src="/themes/bigpicture/images/3d-1.jpg" alt="">
                <!-- <div class="uk-overlay-primary uk-position-cover"></div> -->
                <div class="uk-overlay uk-overlay-default uk-position-bottom a15-overlay">
                  <p>Inside the Ship: 3D Model in Unity</p>
                </div>
              </div>
            </a>
          </div>

        </div>


        <!-- <div class="ap-site-msg-container uk-margin-large">
          <div class="ap-site-msg-heading">
            The Flight Path
          </div>
          <div class="ap-site-msg-body">
            Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus
            malesuada,
            nec convallis lacus commodo. Duis blandit neque purus, nec auctor mi sollicitudin nec. Duis urna ipsum,
            tincidunt at
            euismod ut, placerat eget urna. Curabitur nec faucibus leo, et laoreet nibh. Pellentesque euismod quam at
            eros
            efficitur, vitae venenatis sem consectetur. Donec ut risus ultricies, dictum neque at, bibendum purus. In
            hac habitasse
            platea dictumst.
          </div>
        </div> -->

        <nav class="uk-navbar-container uk-padding ap-nav" uk-navbar style="background: none; overflow: hidden;">
          <div class="uk-navbar-left">
            <div class="ap-site-logo-left">
              <a href="https://www.nasa.gov/mission_pages/apollo/missions/apollo15.html">
                <img src="/themes/bigpicture/images/nasa_logo.svg" class="ap-site-logo-img">
              </a>
            </div>
          </div>
          <div class="uk-navbar-right">
            <div class="ap-site-logo-right">
              <a href="http://digitalscholarship.emory.edu/">
                <img src="/themes/bigpicture/images/ecds_logo.svg" class="ap-site-logo-img">
              </a>
            </div>
          </div>
        </nav>


      </div>
    </section>
    <div class="uk-flex-row">
      <div uk-grid class="uk-grid uk-child-width-1-2 ">


        <!-- left column -->
        <article class="uk-first-column-apollo" id="flight-path">
          <div class="uk-padding">

            <h1 class="uk-heading uk-text-bold uk-margin-remove-bottom" data-aos="fade-in">
              <a class="anchor" href="/">Apollo 15</a>
            </h1>

            <nav uk-navbar data-aos="fade-in" uk-sticky uk-sticky-fixed id="navbar">

              <div class="uk-navbar-left">
                <div class="uk-hidden@m ap-responsive-menu" uk-toggle="target: #offcanvas-nav">
                  <span class="ap-menu-item ap-logo ap-button uk-text-uppercase"> <span uk-icon="menu"></span> Menu
                  </span>
                </div>
                <ul class="uk-navbar-nav uk-visible@m">
                  <li><a class="uk-padding-remove-left uk-text-capitalize" href="/">Flight Path</a></li>
                  <li><a class="uk-text-capitalize"
                      href="https://readux.io/collection/apollo-15/">Data File</a>
                  </li>
                  <li><a class="uk-text-capitalize" href="https://apollo15hub.org/items/browse">Exhibition</a></li>
                </ul>
              </div>
              <div class="uk-navbar-right uk-visible@m" id="navbar-logo">
                <ul class="uk-navbar-nav">
                  <li><a class="uk-text-capitalize" href="/">Apollo 15</a></li>
                </ul>
              </div>
            </nav>

            <section id="trigger-on-earth" class="uk-margin-top">
              <!-- trigger-on-earth-->
              <h2 data-aos="fade-in" data-aos-delay="500" uk-sticky="offset: 80;" uk-sticky-below
                class="uk-margin-remove uk-ap-heading">
                The Apollo 15 Learning Hub</h2>
              <p data-aos="fade-in">
                The Apollo 15 Learning Hub is a project in the Emory Center for Digital Scholarship that has as its
                mission to assemble, preserve, and make available primary source records of Apollo 15 for research,
                education, and preservation as an example of a unique human endeavor. The Hub offers access to a digital
                archive of Apollo 15 onboard materials, an interactive 3D model of the Lunar Module, as well as links to
                reliable primary sources of Apollo history. In this section of the Apollo 15 Learning Hub, we present
                information about the flight path of Apollo 15 to the Moon and back. The original flight documents
                presented here are part of the Learning Hub’s collection and were provided by Commander David R. Scott.
              </p>
              <p data-aos="fade-in">
                NASA’s Apollo program started in the 1960s and continued well into the 1970s, achieving several
                milestones throughout its run with the Moon landing of Apollo 11 being the most famous of them. The
                Apollo 15 mission was part of that effort, being the ninth crewed mission of the Apollo program. The
                Apollo 15 mission involved several groundbreaking scientific experiments as well as innovating space
                travel features.
              </p>
              <p data-aos="fade-in">
                The four primary objectives of the Apollo 15 mission in terms of science and engineering were to explore
                the Hadley-Apennine region of the Moon, set up and activate surface scientific experiments, make
                engineering evaluations of new Apollo equipment, and conduct lunar orbital experiments and photographic
                tasks .
              </p>
              <p data-aos="fade-in">
                On March 26, 1970 NASA announced the crew for Apollo 15, which was planned to be the fifth Moon landing
                mission . The three astronauts selected for the mission were David R. Scott, the mission commander,
                Alfred M. Worden, and James B. Irwin.
              </p>
              <p data-aos="fade-in">
                The Apollo 15 crew and their backups underwent training that lasted about 20 months before their
                mission. Part of that training took place in Antarctica for a habitability study in January 1970, as the
                following video donated by Commander David Scott shows.
              </p>
              <div class="margin-v2">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Training in the Antarctic</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/175"
                    target="_blank">
                    <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <iframe class="uk-width-1-1" src="https://player.vimeo.com/video/497302349" frameborder="0"
                  allowfullscreen></iframe>
              </div>
              <p data-aos="fade-in">
                Another part of that process was geology training exercises in the Orocopia Mountains and in the Mojave
                Desert in California and the area around Flagstaff, Arizona. Apollo 15 would be the first mission to
                utilize the Lunar Roving Vehicle (LRV) to enable the astronauts to travel farther from their Lunar
                Module to explore areas of geologic interest.
              </p>
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" class="uk-margin-remove uk-ap-heading">
                Launch</h2>
              <p data-aos="fade-in">
                The Apollo 15 mission launch date had been scheduled for July 26, 1971. The last few weeks before the
                launch, the astronauts’ training as it related to the launch and everything else about the mission had
                intensified. Every detail about the flight plan, the Command and Service Module (CSM), the plan of
                action after the CSM had left the Earth’s atmosphere was exhaustively examined and checked.
              </p>
              <blockquote data-aos="fade-in">
                Again and again we had practiced every aspect of the mission to the highest possible fidelity. Nothing
                was left to chance. </blockquote>

              <p class="note">Col. David R. Scott, <span>"Two Sides of the Moon"</span>, 244. All quotations are by Col.
                Scott from <a class="ap-inline-link" href="https://books.google.com/books?id=Sb9RAQAAQBAJ">"Two sides of
                  the Moon"</a>.
              </p>
              <p data-aos="fade-in">
                The Apollo 15 crew and their backups had been placed in quarantine for two weeks before the launch to
                ensure that they would not contract any viruses and that they would be in peak physical condition at the
                time of the flight. On the day of the launch, the crew started their day by undergoing a thorough
                physical exam by the Apollo 15 doctors.
                <blockquote data-aos="fade-in">
                  After being declared in excellent physical condition we sat down to a traditional hearty breakfast
                  with members of our back-up-crew and support team. From there we were taken to the suit laboratory,
                  where our individual suit technicians began the lengthy process of fitting us into our spacesuits
                  (244).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                Scott, Worden, and Irwin were helped into their spacesuits several hours before the launch. They had to
                wait for NASA technicians to finish the final check of the launch vehicle wearing their spacesuits,
                which took the whole morning of that day. Finally, the three crew members entered the Command and
                Service Module.
                <blockquote data-aos="fade-in">
                  Two hours and forty minutes before lift-off, first I, then Jim and Al maneuvered ourselves into the
                  confines of the Apollo 15 Command Module perched atop the Saturn V booster rocket (246).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                After the crew had entered the Command and Service Module a new round of checks followed.
                <blockquote data-aos="fade-in">
                  For the next two hours, as we sat on top of this massive explosive device, we ran through a series of
                  system checks with Launch Control (246).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                The following image, which is part of the Apollo 15 Learning Hub’s collection, shows the first page of
                the first page of the Launch Checklist booklet that the Apollo 15 crew had inside the Command and
                Service Module.
              </p>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Launch Checklist</div>
                  <a class="object-action uk-button uk-button-default"
                    href="https://readux.io/volume/tz844/page/tz844_004.jpg" target="_blank">
                    <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <img class="margin-v2" data-aos="fade-in" data-aos-delay="0"
                  src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/tz844_004.jpg/full/full/0/default.jpg">
              </div>
              <p data-aos="fade-in">
                Finally, after everything had been checked and had been found OK, the launch process started at 9:34 AM
                EST at Cape Canaveral, Florida, only 187 milliseconds off schedule. Commander Scott describes the final
                few seconds before lift-off:
                <blockquote data-aos="fade-in">
                  8.9 seconds before lift-off and a deafening roar engulfed the launch tower as the five giant engines
                  of the first stage of the Saturn V rocket – providing a total of 7.7 lb of thrust – ignited (246).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                The following fish-eye color photograph shows the moment the Saturn V rocket is blasting off from the
                launch pad.
              </p>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Apollo 15 Launch</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/68"
                    target="_blank">
                    <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <img class="margin-v2" data-aos="fade-in" data-aos-delay="0"
                  src="https://apollo15hub.org/files/original/e85fdf31c1ed72f39a5d7f005d5c255e.jpg">
              </div>
              <p data-aos="fade-in">
                <blockquote data-aos="fade-in">
                  Three, two, one, all engines running…Launch commit… Lift-off. Right on schedule we started to lift
                  away from the pad (247).
                </blockquote>
              </p>
              <div class="margin-v2" data-aos="fade-in">
                <div class="embed-container" data-aos="fade-in">
                  <iframe src="https://www.youtube.com/embed//5JvMNHx9Rjg" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </section> <!-- end trigger-on-earth -->


            <section id="trigger1">
              <!-- trigger1 -->
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" class="uk-margin-remove uk-ap-heading">Ascent</h2>
              <p data-aos="fade-in">
                The ascent of the space craft was one of the most dangerous parts of the whole mission. There were a
                number of things that could go wrong during this phase that could force Commander Scott to take the
                decision to abort the mission. What made this part of the flight even more stressful was the difficulty
                of replicating the ascent of the CSM in a flight simulator. The time-frame within which an abort could
                be activated was less than a second.
                <blockquote data-aos="fade-in">
                  Throughout these critical moments of our powered ascent there were various modes of aborting the
                  launch in the evet of a major failure of any aspect of either our Apollo spacecraft or the Saturn V
                  gulping 15 tons of fuel per second beneath us. This was one of the riskiest times of the entire
                  mission and one for which it had been particularly difficult to train (247).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                The following cue card that was donated by Commander David Scott to the Apollo 15 Learning Hub shows two
                lists of steps that the commander of the mission would have to take in order to abort the mission, in
                case that was necessary.
              </p>

              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Abort Mission Card</div>
                  <a class="object-action uk-button uk-button-default"
                    href="https://readux.io/volume/v016s/page/v016s_04F.jpg" target="_blank">
                    <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <img class="margin-v2" data-aos="fade-in" data-aos-delay="0"
                  src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/v016s_04F.jpg/full/full/0/default.jpg">
              </div>
              <p data-aos="fade-in">
                The following is a detailed view of the forward panels inside the Lunar Module. We can see the Velcro
                patches where the cue cards where placed inside the Lunar Module and the Command and Service Module
              </p>

              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Lunar Module (LM) Panel</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/147"
                    target="_blank">
                    <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <a href="https://apollo15hub.org/items/show/147">
                  <img class="uk-width-1-1"
                    src="https://apollo15hub.org/files/original/7dafa2e53e5d74e70792b5e720d6357c.jpg">
                </a>
              </div>
              <p data-aos="fade-in">
                The Apollo 15 space craft safely went through the various stages of the ascent from earth without
                encountering any issues that could jeopardize the safety of the crew. When the space craft was out of
                the Earth’s atmosphere and into orbit, Mission Control and the Apollo 15 crew realized that they had
                gone through this dangerous part of the flight without any problems.
                <blockquote data-aos="fade-in">
                  Eleven and a half minutes into the flight (at 94 miles) the third stage of the launch vehicle shut
                  down and we began to experience prolonged weightlessness. Once in orbit “heads down” we caught a
                  glimpse of the Earth (284).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                It would take the Command and Service Module three days of free flight – “translunar coast” – to reach a
                position near the Moon from which they could light our big engine and enter lunar orbit. p. 285
              </p>

            </section> <!-- end trigger 1-->

            <section id="trigger2">
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">Moon
                Landing</h2>
              <p data-aos="fade-in">
                When the Apollo 15 Command and Service Module (CSM) “Endeavour” entered the Moon’s orbit, David Scott
                and James Irwin descended to the Moon in their Lunar Module, the vehicle that was designed to transport
                them from the CSM to the surface of the Moon.
                <blockquote data-aos="fade-in">
                  Al closed the Endeavour’s hatch behind us, and at 100:39 GET he threw the switch to separate the two
                  vehicles. We were on our own. Falcon pulled away from Endeavour. After a final systems check and
                  trajectory certification, Houston gave us a “Go for descent” call. We began preparations to ignite
                  Falcon’s powerful engine which would take us on our descent toward the lunar surface (253).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                They flew their Lunar Module to a perfect landing at 6:16 pm EST July 30 at Hadley Rille about 1,500
                feet north and east of the targeted landing point. They touched down with two of the Lunar Module’s
                landing pads just over the edge of a small crater that the astronauts had not been able to see through
                the dust raised by their rocket engine, causing the lunar module to tilt. But they were stable enough to
                continue their mission . Landing approach over the Apennine Range - one of the highest on the moon - was
                at an angle of 26 degrees, the steepest approach yet used in Apollo missions.
              </p>
              <p data-aos="fade-in">
                The following cue card, which is also part of the Apollo 15 Learning Hub’s collection, contains
                hand-written notes by Commander David Scott. The cue card was inside the Lunar Module and presents a
                list of steps that the crew of the LM had to follow during the landing on the Moon’s surface.
              </p>
              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">LM Landing Cue Card</div>
                  <a class="object-action uk-button uk-button-default"
                    href="https://readux.io/volume/v016s/page/v016s_12F.jpg" target="_blank">
                    <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <a href="https://readux.io/volume/v016s/page/v016s_12F.jpg">
                  <img class="uk-width-1-1"
                    src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/v016s_12F.jpg/full/full/0/default.jpg">
                </a>
              </div>
              <p data-aos="fade-in">
                In the following picture, we see a page from the Lunar Landmark Maps book that the astronauts had with
                them in the Command and Service Module. The hand-written note is about the Proclus Crater on the surface
                of the Moon.
              </p>
              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Handwritten Note about the Proclus Crater</div>
                  <a class="object-action uk-button uk-button-default"
                    href="https://readux.io/volume/spj23/page/spj23_00000029.jpg" target="_blank">
                    <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <a href="https://readux.io/volume/spj23/page/spj23_00000029.jpg">
                  <img class="uk-width-1-1"
                    src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/spj23_00000029.jpg/full/full/0/default.jpg">
                </a>
              </div>
              <p data-aos="fade-in">
                Commander Scott describes the moment right after the Lunar Module had landed:
                <blockquote data-aos="fade-in">
                  The fog of dust dispersed almost instantly and our silvery, spiderlike craft came in to rest with a
                  firm thud (256).
                </blockquote>
              </p>
              <div class="margin-v2" data-aos="fade-in">
                <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Landing on the Moon</div>
                  <a class="object-action uk-button uk-button-default" href="https://vimeo.com/368580707"
                    target="_blank">
                    <!--<span uk-icon="link"></span>-->
                    view
                  </a>
                </figcaption>
                <iframe class="uk-width-1-1" src="https://player.vimeo.com/video/368580707" frameborder="0"
                  allowfullscreen></iframe>
              </div>
              <p data-aos="fade-in">
                It took Apollo 15 104 hours since they left Earth to reach the Moon’s surface. Regarding the specific
                place that the Lunar Module ended up landing, Commander Scott comments:
                <blockquote data-aos="fade-in">
                  It was clear straight away that we had landed on uneven ground: the LM as tipped backward at a slight
                  angle (it turned out later that one of the rear feet had landed in a shallow crater) (256).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                After they landed on the Moon, Commander Scott removed the Lunar Module’s upper hatch, stood on the
                engine cover and spent 33 minutes photographing the surroundings and describing what he saw to
                scientists in Houston.
              </p>
            </section> <!-- end trigger 2-->

            <section id="trigger-on-the-moon">
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">On
                the Moon’s Surface
              </h2>
              <p data-aos="fade-in">
                After they had taken some rest following their landing on the Moon, Scott and Irwin unfolded and
                deployed their lunar rover the following day. Specially designed for operation at 1/6 Earth’s gravity,
                it could carry 180 pounds of astronauts, gear and samples on the Moon (which would weigh 1,080 pounds on
                Earth), more than twice the rover’s weight, but risked collapse if accidentally sat upon while still on
                Earth. Though its range was 40 miles at speeds up to 11 mph, the astronauts were restricted to an area 3
                miles from the lunar module so they could walk back if the rover broke down (Source:
                https://solarsystem.nasa.gov/missions/apollo-15/in-depth/).
              </p>
              <p data-aos="fade-in">
                Describing his experience driving the lunar rover on the Moon’s surface, Commander Scott writes:
                <blockquote data-aos="fade-in">
                  Despite our maximum speed or only 7 or 8 mph, the reduced gravity and very irregular surface meant one
                  or more of the independently suspended wheels lifted away from the surface every time we hit uneven
                  terrain. No part of the lunar surface was totally flat or even (262).
                </blockquote>
              </p>

            <div id="trigger-show-surface">

            <p data-aos="fade-in">
                The Apollo 15 mission was the first one that gave astronauts astronauts to drive a car on the Moon.
                Having the lunar rover allowed Scott and Irwin to complete over 18 hours of exploration and to travel
                17.5 miles on the Moon’s surface during the 3 days (from July 31 to August 2) they spent on the Moon.
                Also, the two astronauts were able to collect more than 170 pounds of lunar samples and to provide
                extensive oral descriptions and photographic documentation of geologic features in the vicinity of the
                landing site (Source: https://www.nasa.gov/mission_pages/apollo/missions/apollo15.html).
              </p>
              <p data-aos="fade-in">
                In this photo that is part of the Apollo 15 Learning Hub’s collection, Commander David Scott tests the
                steering mechanisms of the Lunar Rover before the EVA-2 traverse. The lunar module was controlled by a
                joystick instead of a steering wheel because it would have been difficult for the astronauts to grasp in
                their spacesuits.
              </p>

                <div class="margin-v2">
                  <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                    <div class="object-title">James Irwin on the Lunar Rover</div>
                    <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/86"
                      target="_blank">
                      <!--<span uk-icon="link"></span>--> view </a>
                  </figcaption>
                  <a data-aos="fade-in" href="https://apollo15hub.org/items/show/86">
                    <img class="uk-width-1-1"
                      src="https://apollo15hub.org/files/original/f765d7419062f4c99bb93b436f65f45b.jpg">
                  </a>
                </div>
                <p data-aos="fade-in">
                  Thanks to the television camera mounted on the rover, scientists back on Earth could for the first
                  time see live coverage everywhere the astronauts went, not just at the landing site. The camera could
                  be controlled from Earth, enabling scientists to look around for interesting features while the
                  astronauts conducted their tasks (Source:
                  https://www.youtube.com/watch?v=BTq9jtTg89E&feature=emb_logo&ab_channel=Apollo15-ApolloFlightJournal).
                </p>
                <div class="margin-v2" data-aos="fade-in">
                  <figcaption class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                    <div class="object-title">Video from the Rover Camera</div>
                    <a class="object-action uk-button uk-button-default"
                      href="https://www.youtube.com/watch?v=BTq9jtTg89E&feature=emb_logo&ab_channel=Apollo15-ApolloFlightJournal"
                      target="_blank">
                      <!--<span uk-icon="link"></span>-->
                      view
                    </a>
                  </figcaption>
                  <iframe class="uk-width-1-1" src="https://www.youtube.com/embed/BTq9jtTg89E frameborder=" 0"
                    allowfullscreen></iframe>
                </div>
                <p data-aos="fade-in">
                  Despite the usefulness of the lunar rover, the astronauts conducted most of their geology exploration
                  of the Moon’s surface walking, which turned out be rather challenging given the lower gravity of the
                  Moon:
                  <blockquote data-aos="fade-in">
                    But most of our geology was done on foot. The most effective way of walking turned out to be more of
                    a loping movement, which I can only describe as being something similar to walking on a trampoline
                    (262)
                  </blockquote>
                </p>
                <p data-aos="fade-in">
                  One of the most important aspect of the Apollo 15 mission was the study of the Moon’s geology, which
                  was still not well understood at the time of the mission. Astronauts Scott and Irwin collected several
                  samples during their EVAs. Among the rocks they collected was one that was later dubbed the “Genesis
                  Rock.” It was a very pure specimen of anorthosite, a type of rock believed to have floated like
                  icebergs in the magma oceans that constituted the Moon’s outer layers early in its history. It was
                  found to be more than 4 billion years old and was the most ancient whole rock recovered from the lunar
                  surface to that point. The prospect of finding such rocks was one reason the landing site had been
                  selected ("Apollo 15," https://solarsystem.nasa.gov/missions/apollo-15/in-depth/).
                </p>
                </div>
                <div id="trigger-show-surface2">
                <p data-aos="fade-in">
                  The interaction between Commander Scott, Jim Irwin, and mission control is revealing of their surprise
                  and delight because of that discovery:
                  <blockquote data-aos="fade-in">
                    - I think we found what we came for.
                  </blockquote>
                  <blockquote data-aos="fade-in">
                    - Crystalline rock, huh?
                  </blockquote>
                  <blockquote data-aos="fade-in">
                    - Yes, sir. You better believe it. Oh, boy, I think we might have ourselves something close to
                    anorthosite…What a beaut (269).
                  </blockquote>
                </p>
                <p data-aos="fade-in">
                  That gleaming sample was soon named the “genesis rock”.
                </p>
                <div class="margin-v2">
                  <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                    <div class="object-title">EVA 2: 2 - Genesis Rock</div>
                    <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/9"
                      target="_blank"> <span uk-icon="link"></span>
                      view </a>
                  </figcaption>
                  <iframe data-aos="fade-in" class="uk-width-1-1"
                    src="https://player.vimeo.com/video/265046072"></iframe>
                </div>
                </div>
                <div id="trigger-show-surface3">
                <p data-aos="fade-in">
                  At the end of the final EVA, Scott performed a televised sequel to the experiment Galileo is purported
                  to have conducted at the Tower of Pisa. He dropped a hammer and a feather together in the lunar vacuum
                  and observed that they struck the ground at the same time ("Apollo 15,"
                  https://solarsystem.nasa.gov/missions/apollo-15/in-depth/). Commander Scott describes how he conducted
                  the experiment:
                  <blockquote data-aos="fade-in">
                    I wanted to prove the law, proposed more than there centuries before by the Italian astronomer and
                    mathematician Galileo Galilei, that all objects fall with equal speed in a vacuum. Taking into one
                    hand a falcon feather I had brought along for the purpose and in the other my trusty aluminium
                    geology hammer, I positioned myself in front of the cameras, raised my arms and let both objects
                    fall (273).
                  </blockquote>
                </p>
                <p data-aos="fade-in">
                  This video that is part of the Apollo 15 Learning Hub’s collection shows how the feather and hammer
                  experiment was shown on TV back on earth.
                </p>

                <div class="margin-v2">
                  <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                    <div class="object-title">EVA 3: 2 - The Hammer and Feather experiment on the surface of the Moon as
                      shown on TV</div>
                    <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/11"
                      target="_blank">
                      <!--<span uk-icon="link"></span>-->
                      view
                    </a>
                  </figcaption>
                  <iframe data-aos="fade-in" class="uk-width-1-1"
                    src="https://player.vimeo.com/video/265046535"></iframe>
                </div>

              </div>
            </section> <!-- end tirgger on moon-->

            <section id="trigger3">
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">Sub
                Satellite</h2>
              <p data-aos="fade-in">
                On Aug. 2, the Lunar Modulefired its ascent stage engine and lifted off the moon for its rendezvous with
                command module, or CM, Endeavor. For the first time, the lunar liftoff was seen on Earth via the LRV
                television camera. The two spacecraftsdocked as Endeavor began its 50th lunar orbit. On the 74th
                revolution, the Particles and Fields subsatellite was spring-launched from the service modulebay. On the
                next revolution, Aug. 4, a 2-minute, 21-second propulsion systemburn put Apollo 15 on its path back to
                Earth ("Apollo 15," https://www.nasa.gov/mission_pages/apollo/missions/apollo15.html). This photo shows
                one page ofthe flight plan that was used by the crew of Apollo 15 onboard the Command and Service
                Modulewith handwritten annotations by the crew. This photoshowsone hourof the schedule that the crew had
                to follow after the CommanderDavidScott and James Irwin had returned back to the CSM after their Lunar
                landing.
              </p>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">CSM Flight Plan</div>
                  <a class="object-action uk-button uk-button-default"
                    href="https://readux.io/volume/tsnhf/page/tsnhf_00000113.jpg" target="_blank">
                    <!--<span uk-icon="link"></span>--> view </a>
                </figcaption>
                <a data-aos="fade-in" href="https://readux.io/volume/tsnhf/page/tsnhf_00000113.jpg">
                  <img class="uk-width-1-1"
                    src="https://images.readux.ecds.emory.edu:8443/cantaloupe/iiif/2/tsnhf_00000113.jpg/full/full/0/default.jpg">
                </a>
              </div>
              <p data-aos="fade-in">
                While travelling back to Earth, the Apollo 15 crew had several tasks to complete, the first of which was
                to launch the sub-satellite:
                <blockquote data-aos="fade-in">
                  We still had a fairly full program of scientific experiments to perform during our return journey.
                  First, before leaving lunar orbit, we had to deploy a small hexagonal satellite, the first
                  sub-satellite to be launched in space, which would continue to orbit the Moon and send back data on
                  its magnetic field for over a year (277).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                The following series of photos is detailing the launch of the sub-satellite from the Command and Service
                Module.
              </p>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Subsatellite Launch</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/4"
                    target="_blank">
                    <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <iframe data-aos="fade-in" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                  src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/431162745&color=%23ff5500&auto_ıplay=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
              </div>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Subsatellite Launch</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/34"
                    target="_blank">
                    <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1"
                  src="https://apollo15hub.org/files/original/b0c3a15e196c5ebebd0acf9b89534de8.jpg" />
              </div>
              <p data-aos="fade-in">
                This small satellite was designed around a hexagonal structure with a diameter of 14 inches that was
                equipped with three instrument booms. The power supply came from solar panels and chemical batteries.
                The instruments measured the strength and direction of interplanetary and terrestrial magnetic fields,
                detected variations in the lunar gravity field, and measured proton and electron flux ("Apollo 15,"
                https://solarsystem.nasa.gov/missions/apollo-15/in-depth/).
              </p>
            </section> <!-- end trigger 3-->

            <section id="trigger4">
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">
                Return to Earth</h2>
              <p data-aos="fade-in">
                On August 5, while the Command and Service Module was on its way back to Earth, Alfred Worden had to
                perform a deep space extravehicular activity - “the first ever performed in deep space” as Commander
                Scott mentions in his book (227).
              </p>
              <p data-aos="fade-in">
                In this photo, we see Astronaut Alfred M. Worden floating in space outside the spacecraft during his
                trans-Earth EVA. During his EVA, Worden made an inspection of the Service Module’s Scientific Instrument
                Module (SIM) bay and retrieved the film cassettes from the Panoramic Camera and the Mapping Camera
                before the SIM was discarded into space.
              </p>

              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Worden During His Trans-Earth EVA</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/43"
                    target="_blank">
                    <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1" data-aos="fade-in"
                  src="https://apollo15hub.org/files/original/84f76c05c08318a74217aefdfa43ac1e.jpg" />
              </div>

              <p data-aos="fade-in">
                Toward the end of their trip to the Moon and back the crew started preparing for landing back on Earth.
                The landing procedure went smoothly for the most part, although there was an unexpected problem that
                could have potentially jeopardized the mission:
                <blockquote data-aos="fade-in">
                  Twelve days after blasting away from the Cape we prepared our spacecraft for landing […] one of the
                  Endeavour’s three main parachutes collapsed shortly after it was deployed. But the remaining two were
                  sufficient to break our fall and bring us down safely (278).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                This is a color photograph capturing the Apollo 15 CSM impact with the ocean. The two successfully
                deployed parachutes are visible.
              </p>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Return to Earth</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/78"
                    target="_blank">
                    <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1" data-aos="fade-in"
                  src="https://apollo15hub.org/files/original/cd4a3795f1de2bec062903347441f6de.jpg" />
              </div>

              <div class="margin-v2">
                <div class="embed-container" data-aos="fade-in">
                  <iframe src="https://www.youtube.com/embed/E-Vd75Ptg9I" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <p data-aos="fade-in">
                At approximately 4:46 p.m. EDT Aug. 7, Apollo 15 splashed down in the Pacific Ocean, about 335 miles
                north of Honolulu, ending a flight of 12 days, seven hours. The crew was picked up by helicopters from
                the prime recovery ship, the USS Okinawa, 6.32 miles from the targeted touchdown point ("Apollo 15,"
                https://www.nasa.gov/mission_pages/apollo/missions/apollo15.html).
              </p>

              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">Astronauts</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/25"
                    target="_blank">
                    <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1"
                  src="https://apollo15hub.org/files/original/e38f70d36e85249c8a05ec8d7fe022e7.jpg" />
              </div>

            </section> <!-- end trigger 4-->

            <section>
              <h2 data-aos="fade-in" uk-sticky="offset: 80;" uk-sticky-below class="uk-margin-remove uk-ap-heading">
                Conclusion</h2>
              <p data-aos="fade-in">
                The return of the Apollo 15 mission included a long series of talks and presentations for the crew
                members that were informed about the accomplishments of their mission regarding the scientific
                experiments they had conducted, as well as the engineering and other technical achievement of the Apollo
                15 mission. Commander Scott commenting on the aftermath of the Apollo 15 mission:
                <blockquote data-aos="fade-in">
                  ... immediately on our return we went through endless debriefings about the science, engineering and
                  operation of our mission, all of which was very interesting (280).
                </blockquote>
              </p>
              <p data-aos="fade-in">
                In the following photo, we see Astronauts David R. Scott, left foreground, and James B. Irwin, right
                foreground, join the Manned Spacecraft Center’s geologists in getting first looks at some of the first
                Apollo 15 samples to be opened in the Non-Sterile Nitrogen Processing Line in the MSC Lunar Receiving
                Laboratory (NASA).
              </p>
              <div class="margin-v2">
                <figcaption data-aos="fade-in" class="uk-flex uk-flex-bottom uk-flex-between uk-margin-small-bottom">
                  <div class="object-title">The MSC Lunar Receiving Laboratory</div>
                  <a class="object-action uk-button uk-button-default" href="https://apollo15hub.org/items/show/88"
                    target="_blank">
                    <!--<span
                      uk-icon="link"></span>-->
                    view </a>
                </figcaption>
                <img data-aos="fade-in" class="uk-width-1-1"
                  src="https://apollo15hub.org/files/original/f1bb696c0ba1b1923cd9e91fdeb1f1df.jpg" />
              </div>
              <p data-aos="fade-in">
                The samples that the mission brought back had been deemed as especially valuable by NASA scientists and
                it would turn out to be one of the more noteworthy contributions of the Apollo 15 mission. -Dimitri
                Zaras, 2021
              </p>
            </section>

            <section>
              <h2 data-aos="fade-in" uk-sticky="bottom: true; offset: 80;" class="uk-margin-remove uk-ap-heading">About
              </h2>
              <p data-aos="fade-in">
                <a href="https://github.com/ecds/Apollo-15-Flight-Path"
                  class=" object-action uk-button uk-button-default"><span uk-icon="github"></span>
                  visit
                  on github </a>
              </p>
              <p data-aos="fade-in">
                Flight Path is designed and produced by <a href="https://github.com/jcmundy"
                  class="ap-inline-link">Joanna
                  Mundy</a>, <a href="https://github.com/jayvarner" class=" ap-inline-link">Jay Varner</a> and <a
                  href="https://github.com/yl5682" class="ap-inline-link">Yang Li</a> at <a
                  href="https://ecds.emory.edu/" class="ap-inline-link">Emory Center for Digital Scholarship. </a>
              </p>
              <a href="https://ecds.emory.edu/" class=""><img class="margin-v2" data-aos="fade-in" width="300px"
                  src="/themes/bigpicture/images/lits-ecds-hz-grey.svg"></a>
            </section>

          </div>
        </article>
        <!-- left column -->

        <!-- right column -->
        <div class="svg-collection">
          <?xml version="1.0" encoding="utf-8"?>
          <svg id="field" class="flight-path" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 391.9 699"
            style="enable-background:new 0 0 391.9 699;" xml:space="preserve">
            <g id="Layer_2_1_">
              <path id="leg-4" style="stroke-linecap: round; stroke-linejoin: round;" fill="none" stroke="darkturquoise"
                stroke-width="5" class="st0" d="M146.8,486.9c-12-6.3-20.3-18.1-22.2-31.5c-0.4-2.9-0.8-8.6,3.4-23.1
		c5.6-19.4,10.4-28.5,14.9-35.6c3.1-5,6.6-9.5,15.2-18.8c21.5-23.3,29-26.9,47.2-46.2c9.4-10,18.2-20.5,26.5-31.5
		c8.5-11.2,16.2-21.4,24-36.5c4-7.6,7.4-15.4,10.2-23.5c6.6-19,9.7-38.9,9.2-59c-0.6-15.2-3.3-30.3-8-44.8
		c-3.2-9.7-6.9-20.5-15.8-32c-5.1-6.5-10.8-13.9-21.2-18.2c-10.7-4.5-27.5-6-33.2,2.2c-1.3,1.9-2,4.2-2,6.5" />
              <path id="leg-3" style="stroke-linecap: round; stroke-linejoin: round;" fill="none" stroke="darkturquoise"
                stroke-width="5" class="st0" d="M177.7,449.3c-4.3-3.7-10.1-9.6-13.3-16.8c-0.9-2.1-1.6-4.2-0.8-6.3c1.4-3.5,6-4.5,7.2-4.8
		c7.5-1.7,14.1,3.1,16.3,4.7c1.6,1.1,11,8.2,12.2,20.9c0.5,6.1-0.9,12.1-3.9,17.4c-1.6,3.2-7.3,14.1-19.5,17.1
		c-10.4,2.5-19-2.4-21.6-3.9c-10.3-6-17.5-17.6-17.6-29.8c-0.1-11.3,5.6-21.9,15.2-28c2.3-1.5,11.7-7.4,23.6-5
		c6.9,1.4,11.4,4.9,14.9,7.8c4.6,3.7,14.3,11.6,16.2,24.7c2.3,15.8-8.2,27.4-11,30.5c-12.3,13.8-32.4,17.5-48.8,9.1" />
              <path id="leg-2" class="st1" style="stroke-linecap: round; stroke-linejoin: round;" fill="none"
                stroke="deeppink" stroke-width="5" d="M118.6,414.1c0.2-1.4,0.5-2.8,0.8-4.2c1.3-5.2,3.5-10.1,6.7-14.4c2.3-3.2,5.1-5.9,8.3-8
		c4.1-2.7,8.8-4.4,13.7-5c9.1-1.1,16.2,2.1,20.3,4c10.6,5,16.4,12.4,22.6,20.3c7,9,12.3,19.1,15.6,30c2.3,7.7,2.4,12,2.3,14.6
		c-0.2,6.2-1.9,12.2-5,17.6c-4.4,8.2-11.6,14.4-20.3,17.6c-0.8,0.3-13,4.4-25.8-0.7c-3.8-1.3-7.2-3.5-10-6.3c-2.7-2.9-4.7-6.3-6-10
		c-2.1-5.6-3-11.7-2.5-17.7c0.3-3.8,1.2-7.5,2.5-11c0.8-2.8,2.1-5.4,3.8-7.7c1.8-2.8,4.3-5.1,7.3-6.7c2.4-1.3,5-2.1,7.7-2.1
		c3.7,0.1,7.3,1.6,10,4.1c3.4,3.3,4.5,7.3,5.8,12.7c0.7,2.7,1.1,5.4,1.2,8.1" />
              <path id="leg-1" class="st1" style="stroke-linecap: round; stroke-linejoin: round;" fill="none"
                stroke="deeppink" stroke-width="5" d="M205.2,167c-0.7,2.7-1.6,6.5-2.3,11c-1.2,8-1,13.8-0.7,22.3c0.6,15.1,2.4,19.2,3.7,21.7
		c1,2.3,2.5,4.3,4.3,6c7.8,6.6,22.1,5.3,19.7,5c3.4-2.3,6.6-4.9,9.7-7.7c17.1-15.7,23.5-34.2,26.3-42.7c5-15.1,6.7-31.2,5-47
		c-1.4-10.9-4.5-21.5-9.3-31.3c-8-16.2-18.5-26.1-25.7-32.7c-5.8-5.6-12.1-10.5-19-14.7c-29.7-17.6-61.9-12.7-72-11
		c-10.6,1.8-24.9,4.3-39.7,14.7c-13.6,9.6-20.5,20.8-26.3,30.3c-15.2,24.8-17.9,48.4-19,58.7c-0.9,7.9-1.1,15.8-0.7,23.7
		c1.9,35.6,16.7,62.1,25.8,77.8c10.7,18.5,21.5,31.3,35.5,48c10.7,12.7,16.4,18.2,33.5,38.8c0.6,0.8,11.4,13.8,23.2,30.2
		c3,4.1,6.3,8.9,10.2,15.2c3.5,5.4,6.6,11,9.4,16.7c2.8,5.7,4.4,9.7,7.1,16.4c7.8,19.6,9.2,27.7,9.8,32.1c0.3,1.7,0.4,3.3,0.5,5
		c0.5,14.3-8.7,25-9.3,25.6c-9.5,10.7-22.3,12-28,12.6c-4,0.4-12.3,1.2-21-3c-2.1-1.1-4.1-2.3-6-3.7c-14.3-10.6-21.8-27.7-24.7-34.4
		c-2.9-6.7-5.7-13.5-6.7-23c-0.5-4.5-0.5-9,0.2-13.5" />
              <image id="ship" class="ship" width="100" height="100" transform="scale(1)"
                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIsAAADQCAYAAAA3UJLLAAAACXBIWXMAAC4jAAAuIwF4pT92AAAGX2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDYgNzkuMTY0NjQ4LCAyMDIxLzAxLzEyLTE1OjUyOjI5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjIuMiAoTWFjaW50b3NoKSIgeG1wOkNyZWF0ZURhdGU9IjIwMjEtMDItMTVUMTQ6MzM6NTctMDU6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDIxLTAzLTEyVDEwOjU0OjQ5LTA1OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDIxLTAzLTEyVDEwOjU0OjQ5LTA1OjAwIiBkYzpmb3JtYXQ9ImltYWdlL3BuZyIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9InNSR0IgSUVDNjE5NjYtMi4xIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjYyZjQ1ZTIzLWZiZjItNDUwMy04NzIyLWJkNmE2MWU4NjI0MiIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjMzODg1NWNhLTA1MGYtNzQ0MC05OWRlLTljNmZhMzgzMWNlMSIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOmVmZDI1YjNlLTc5NGQtNDFiZi05N2QwLTRhM2Q3MTFlZGE5NSI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ZWZkMjViM2UtNzk0ZC00MWJmLTk3ZDAtNGEzZDcxMWVkYTk1IiBzdEV2dDp3aGVuPSIyMDIxLTAyLTE1VDE0OjMzOjU3LTA1OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjIuMiAoTWFjaW50b3NoKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY29udmVydGVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJmcm9tIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo2MmY0NWUyMy1mYmYyLTQ1MDMtODcyMi1iZDZhNjFlODYyNDIiIHN0RXZ0OndoZW49IjIwMjEtMDMtMTJUMTA6NTQ6NDktMDU6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMi4yIChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PkTX6AIAACDbSURBVHja7Z0JfFNV9sdPlqZ7kjbdKaULtGUZQHYUpEWHYRhBQZ2/iIwL4AKo48Kg4jKgLIqCf0UdwXGEGZW/CjiDgAvSUgQsW8sOZWnpmjZNmu5Jm+V/zqOv8/pMQistpMn9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" />
              <image id="lm" class="lm" width="100" height="100" transform="scale(1)"
                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIsAAADQCAYAAAA3UJLLAAAACXBIWXMAAC4jAAAuIwF4pT92AAAGX2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNi4wLWMwMDYgNzkuMTY0NjQ4LCAyMDIxLzAxLzEyLTE1OjUyOjI5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjIuMiAoTWFjaW50b3NoKSIgeG1wOkNyZWF0ZURhdGU9IjIwMjEtMDItMTVUMTQ6MzM6NTctMDU6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDIxLTAzLTEyVDEwOjU0OjQ5LTA1OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDIxLTAzLTEyVDEwOjU0OjQ5LTA1OjAwIiBkYzpmb3JtYXQ9ImltYWdlL3BuZyIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9InNSR0IgSUVDNjE5NjYtMi4xIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjYyZjQ1ZTIzLWZiZjItNDUwMy04NzIyLWJkNmE2MWU4NjI0MiIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjMzODg1NWNhLTA1MGYtNzQ0MC05OWRlLTljNmZhMzgzMWNlMSIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOmVmZDI1YjNlLTc5NGQtNDFiZi05N2QwLTRhM2Q3MTFlZGE5NSI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ZWZkMjViM2UtNzk0ZC00MWJmLTk3ZDAtNGEzZDcxMWVkYTk1IiBzdEV2dDp3aGVuPSIyMDIxLTAyLTE1VDE0OjMzOjU3LTA1OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjIuMiAoTWFjaW50b3NoKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY29udmVydGVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJmcm9tIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo2MmY0NWUyMy1mYmYyLTQ1MDMtODcyMi1iZDZhNjFlODYyNDIiIHN0RXZ0OndoZW49IjIwMjEtMDMtMTJUMTA6NTQ6NDktMDU6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCAyMi4yIChNYWNpbnRvc2gpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDwvcmRmOlNlcT4gPC94bXBNTTpIaXN0b3J5PiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PkTX6AIAACDbSURBVHja7Z0JfFNV9sdPlqZ7kjbdKaULtGUZQHYUpEWHYRhBQZ2/iIwL4AKo48Kg4jKgLIqCf0UdwXGEGZW/CjiDgAvSUgQsW8sOZWnpmjZNmu5Jm+V/zqOv8/pMQistpMn9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" />
            </g>
          </svg>
          <object data="/themes/bigpicture/images/Earth2017.svg" class="earth" type="image/svg+xml"></object>
          <object data="/themes/bigpicture/images/moon-color.svg" id="moon" class="moon" type="image/svg+xml"></object>
          <object data="/themes/bigpicture/images/surface_EVA1_lm.svg" class="surface uk-cover-container" type="image/svg+xml"></object>
          <object data="/themes/bigpicture/images/surface_EVA2_lm.svg" class="surface2 uk-cover-container" type="image/svg+xml"></object>
          <object data="/themes/bigpicture/images/surface_EVA3_lm.svg" class="surface3 uk-cover-container" type="image/svg+xml"></object>
        </div>
        <!-- right column -->

      </div>
    </div>
  </div>


  <div class="background">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
  </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.17/js/uikit-icons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://scrollmagic.io/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="/themes/bigpicture/js/index.js"></script>

</html>

' ?>

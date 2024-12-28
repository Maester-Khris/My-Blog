@extends('blog/article_layout', ['title' => 'Introduction to performance evaluation'])

@section('content')
<div class="card d-flex flex-column justify-content-center" style="height:400px;">
    <img src="/images/team-evaluation.png" class="card-img-top" alt="article illustration" style="height: 100%;">
</div>
<div style="padding-left: 10px;">
    <h2
        style="color:#0047AB;font-size: 30px!important; margin-top:15px;position:relative;line-height:25px;margin-bottom:25px;">
        Custom approach to organization team performance assessment
        {{-- <small style="position: absolute;font-size:14px; color:grey;right:5px; bottom:-3px;"><i class="bi bi-person-bounding-box highlight-pr-color"></i> Reviewed by  <strong>No Reviewer</strong></small> --}}
    </h2>
    <div class="media">
        <img src="/images/author.png" class="mr-3 border" alt="author"
            style="height: 40px; width:40px; border-radius:20px;border-color:gray;border-width: 12px;">
        <div class="media-body">
            <h4 class="mt-0" style="color:#0047AB;margin-bottom:0px;font-size:17px;">Joel Gouend</h4>
            <p style="font-size:12px;">Published on 20 December</p>
        </div>
    </div>
    <div class="card" style="margin-top: 20px; padding:15px; font-size:16px; color:grey;">

        <span class="d-inline-block">
            <h3>1. Context and Problem formulation</h3>
            <h4>1.1 Context </h4>
            <p>
                The organization consists of $N$ teams, each working on a set of projects. Each
                project has a defined structure that includes a title, objective, status, and set of
                tasks. Each task is characterized by its title and status. The organization aims
                to evaluate the performance of each team based on their accomplishments over
                a specified period of time.
            </p>

            <h4>1.2 Mathematical Model</h4>
            <em>Defintions</em>         
            <ul>
                <li>Let $N$ be the number of teams. Each team $T_i$ is identified by its ID. Each team is associated with a set of $P$ projects. $P$ of size $m$</li>
                <li>Let $p_k \epsilon P$</li>
                <li>$p_k = \left\{p_{title}, p_{objective}, p_{status}, p_{ts}, p_{startdate}\right\} / p_{status} \epsilon \left\{0,1\right\}$ and
                    $p_{ts}$ of size $n$, the set of tasks included in the project</li>
                <li>
                    Let $t$ a Task / $t = \left\{t_{title} , t_{status} \right\} / t_{status} \epsilon \left\{0,1\right\}$
                </li>
            </ul>

            <h3>2. Solution proposal</h3>
            <p class="inner-partial">
                The organization has chosen for the moment to focus on achievement and
                realizations per team and per projects in order to determine the perfor-
                mance of a specific team. In order to assess that performance metric we
                propose to evaluate the team on the number of project achieved (com-
                pleted) and for each project the number or task done (completed). Also
                in order to promote a high achieving environment, the management has
                proposed to give add a fixed bonus $E_k$ equivalent for each team $T_i$ that has
                completed a project $p_k$ . The Following algorithm give a formal description
                of the performance criteria calculations.
            </p>
            <div class="card img-illustration" style="">
                <img src="/images/base_algo.png" class="card-img-top" alt="...">
            </div>
            
            <h3> 3. Notes and Observations</h3>
            <p class="inner-partial">
                We just presented a naive approach useful to determine the performance
                of a team in an organization context where the work framework is struc-
                tured in team, projects and tasks. However the proposed solution could
                be improved. We would like to state that even though the actual solu-
                tion is reflecting the organization process, it doesn’t incorporate all the
                constraints necessary to judge the performance of a team on a real life
                scenario. Therefore we present a set of considerations needed to be taking
                in account for further improvement of the actual solution:
            </p>
                <ul>
                    <li>The Internal characteristic of the project such as its complexity, the
                        number of task required, the time spent to complete the project. We
                        can all agree that if we were to measure the performance of Team
                        A and Team B that have respectively spent 1 day and 5 day over
                        project with respective complexity 2 and 10, we will more likely give
                        a high score to Team B.
                    </li>
                    <li>Another relevant point is the composition of the team and it’s size.
                        since those factors could impact the quality of their work and the
                        time spent to finish the project.
                    </li>
                    <li>
                        Finally the quality of the ”job done”. How the organization evaluate
                        the quality of final project? The quality of the efforts and results
                        obtained could immensely impact the score of a team.
                    </li>
                </ul> 
        </span>
    </div>
</div>
@endsection
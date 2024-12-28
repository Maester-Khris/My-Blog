@extends('blog/article_layout', ['title' => 'Weighted Approach for performance evaluation'])

@section('content')
    <div class="card d-flex flex-column justify-content-center" style="height:400px;">
        <img src="/images/agile_team_cleanup.jpg" class="card-img-top" alt="article illustration">
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
                <h4>1.1 Context recall</h4>
                <p>
                    We previously introduced the problem of evaluating team performance within
                    an organization. As a reminder, it has been stated that the organization work
                    framework is structured in teams, each team working on a set of projects, each
                    project including a set of Tasks. To the matter of performance evaluation, we
                    proposed a naive solution that was focus on the global achievement per project
                    and tasks, hence we derived a formal solution. However, we came across some
                    consideration that made us think that the solution could be improved. The
                    main issue with the previous proposition was the lack of some key factor to
                    better represent the project, such as the characteristic of the project, the team
                    composition, and the quality of result obtained.
                </p>

                <h4>1.2 Mathematical Model</h4>
                <ul>
                    <li>
                        The organization is made up of N teams. A Team $T_i$ is defined by $ T_i = \left\{ t_{id}, t_{size},
                        t_{composition}, t_{quality} \right\}, i \epsilon \left\{1,...,N\right\}$
                    </li>
                    <li>
                        A team $T_i$ works on a set of $P$ projects. $P$ of size $m$.
                        Let's define $p_k \epsilon P$ <br>
                        $p_k = \left\{ p_{title}, p_{objective}, p_{status}, p_{ts}, p_{startdate}, p_{complexity}, p_{ec},
                        p_{rc}, p_{quality} \right\} <br>
                        $ with $k \epsilon \left\{1,...,m\right\}$, <br>
                        $p_{k_{ec}}$: project estimated completion time, <br>
                        $p_{k_{rc}}$: project real completion time.
                    </li>
                    <li>
                        A project consists of a set of $T$ task. $T$ of size $n$. Let's be $t \epsilon T $ <br>
                        $t = \left\{t_{title}, t_{status}\right\}$
                    </li>
                </ul>
                <p>
                    Last time the evaluation of a project itself was solely based on the number of task done, this not
                    allowing the management team to appreciate more deeply the constraints of the project. This time we
                    integrated the quality and time measure in order to reflect those constraints. To this end the following
                    attributes were added to complete the project description: complexity, estimated and real project
                    completion time and quality.
                    The main elements description set, we had to come up with an improve model to assess the team peformance
                    in a way that will integrate the key project constraints: time, quality, complexity and achievements.
                </p>

                <h3>2. Updated Solution Proposal</h3>
                <p>
                    In a general framework, Efficacity measure the capacity to reach a certain fixed goal, whereas
                    Efficiency is efficacity under resource constraints. In our organizational framework, the goal for a
                    team is to complete projects efficiently while managing time constraints.
                    As a step further to our last article we propose here to not limit ourself to the team achievement but
                    the overall team efficiency hence the faculty of a team to achieve the most, at the best possible level
                    (or with the best possible quality) with minimizing the time constraint. In other words the team
                    efficiency will be function of the team performance (that reprensent achievements) and the team quality
                    (that represent a way to quantify how well the team have done the job) both being subject to time
                    constraint
                </p>
                <h4>2.1 Team ($T_i$) performance assessment on a project $p_k$</h4>
                <p class="inner-partial">
                    The last definition of the team performance was based on a solid ground since it was focused only on the
                    achievement. To this formulation we had to integrate the time factor and the project new attributes. At
                    the end of a thought process we decided to formulate it this way:
                    the team performance on a project $p_k$ should be function of the number of achievements (task
                    completed) the project completion time (based on estimated and real data), plus the project completion
                    bonus.<br>
                    Also, in order to reflect the new structure we decided to update the definition of the completion bonus
                    $E_k$ to make it fair for teams working on more complex project. <br>
                    $T_{i_{perf}}(p_k)=(\sum_{1}^{n} t_j * e_j)*(p_{k_{ec}}/p_{k_{rc}}) + E_k \, / \, E_k = F *
                    p_{k_{complexity}}$
                </p>
                <ul>
                    <li>
                        $e_j$: binary variable indicating the completion of the task
                    </li>
                    <li>
                        $F$: Fixed factor for project completion bonus
                    </li>
                </ul>
                <p>
                    You certainly noticed that we have chosen to use the estimated and real time completion attribute, this
                    is because the performance of a team inside an organization is relative to other team in terms some
                    internal factors, the case is here is how good the team is able to finish a project while respecting the
                    management given timeframe.
                </p>
                <h4>2.2 Team ($T_i$) quality assessment on a project $p_k$</h4>
                <p>
                    On the last article we talked about how we used normalization to ensure we can compare each team on the
                    same scale. In that same thought pattern we design the measure of the team quality on a specific project
                    $p_k$ as following:
                    <span class="d-block spec-formula">
                        $\left\{\begin{matrix}
                        T_{i_{quality}}(p_k) = p_{k_{complexity}} * p_{k_{quality}} * p_{k_{durationtime} }
                        \\
                        p_{k_{quality}} \epsilon [1,..,5]
                        \end{matrix}\right.$
                    </span>

                    You certainly noticed that we have chosen to use the duration time attribute, this is because the
                    measure of a team quality on a project is solely based on the project itself and nothing else.
                </p>
                <p class="inner-partial">
                    The final evaluation of the efficiency of a team ti on a project $p_k$ is obtained by combining the two
                    formulas and applying normalization on the result.
                    <span class="d-block spec-formula">
                        $T_{i_{effiency}}(p_k) = Normalization (\sum_{k=1}^{m}(T_{i_{quality}}(p_k) + T_{i_{perf}}(p_k)))$.
                    </span>
                    The global team quality will be evaluated as the mean average of its efficiency over it's past completed
                    project beginning from the team creation date or the assessment period start date.
                </p>
                <ul>
                    <li>At $time=0$, the team hasn't worked yet on any project, $t_{quality} = Q$. $Q$ is a fixed factor for
                        all teams, which represents the organization's trust level that each team might be at least
                        mid-good.</li>
                    <li>At $time>0$, $T_{i_{quality}} = \mu T_{i_{effiency}}(p) = (\sum_{k=1}^{m} T_{i_{effiency}}(p_k)) /
                        m$, $m$: the number of project completed by the team between the assessment period.</li>
                </ul>
                <p></p>
                <div class="card img-illustration" style="">
                    <img src="/images/improved_algo.png" class="card-img-top" alt="...">
                </div>

                <h3>3. Weighted factors</h3>
                <p class="inner-partial"> We have come far yet, but there is still some point to keep in mind. The actual
                    solution implies that the evaluation relies on achievements and quality. with both having the same
                    impact on the final measure. However is it true that in organizations the numbers on job done, the
                    quality of job done and the time spent have the same importance ?
                    Here we are walking on the set of project management domain, and I would like to refer to the agile
                    project management framework.
                    For those that are new to agile, Agile is an iterative and incremental process that prioritize the speed
                    to deliver a functional increment to the market. In Agile, the focus is on delivering functional
                    increments quickly, which highlights the need to balance quality, efficiency, and time. Based on this
                    brief definition let's review some keypoints to assess the importance on each one and identify how they
                    relate to our context :
                </p>
                <ul>
                    <li>
                        Iterative and incremental: in the specific case a software development, the agile workflows is set
                        up in a way that the team doesn't wait to have the complete software solution to be built before
                        releasing it. Instead, the software is broken in features that will become the goals of agile
                        sprints. Therefore, after each sprint the team has a working increment to deliver
                    </li>
                    <li>
                        Functional (working) increment: It is sometimes said that if the software development projects were
                        entirely managed by engineers or developers, the project would never be delivered (or will take too
                        much time). This is because as software engineers or developers we tend to focus on the solution and
                        every tiny aspect about it, hence creating the sentence "it's not yet ready". Which lead me to
                        present you one of the best points in the agile project management : the "definition of done". This
                        concept is one of the best reasons why agile team can move so fast, since it will define how "good"
                        an increment have to be before mark it as done, instead of waiting to mark all the case of the
                        tasklist.
                    </li>
                </ul>
                <p class="inner-partial"> So with the agile process management in mind, it is up to each project manager to
                    decide if the priority is the rapidity to deliver or the quality of increments, and this decision will
                    of course impact how team will be evaluated, therefore the need to assign weight to both component of
                    formula to reflect this business process. Hence we update our formula as following: </p>
                <ul>
                    <li>
                        Let's define $w_p, w_q$ be the weight of performance and quality $/ w_p, w_p \epsilon [1,...,5]$
                    </li>
                    <li>
                        Let's decide $w_p > w_q$, we choose to highlight the priority of quantity of achievement, which can
                        be translated to rapidity to deliver
                    </li>
                </ul>
                <p>
                    With this in mind let's update the formula of efficiency:
                    <span class="d-block spec-formula">
                        $T_{i_{effiency}}(p_k) = Normalization (\sum_{k=1}^{m}(T_{i_{quality}}(p_k) * w_q +
                        T_{i_{perf}}(p_k) * w_p))$
                    </span>
                </p>

                <h3>4. Closing Thoughts</h3>
                <p>
                    The present paper intended to propose an improvement to the previous solution designed to address the
                    team performance evaluation problem. To this end, we first propsoed to enlarge the description of the
                    main entities to cover enough charasterestic on the organization notably the constraints about teams and
                    projects. Through our work instead of staying focus on the achievements, we proposed to enlarge the
                    solution by computing the team efficiency, which represent the team performance and quality on a set of
                    realized projects, these metrics evaluated on the constraints of time, achievement and quality obtained.
                    Overall we can say that the proposed improvement embetter the existing process, in a way that the
                    organization or the management team is equipped with a solution that to automate performance evaluation
                    while taking in account key business metrics tied to real business constraints such as time to delivery,
                    product quality and procedure efficiency. However there is still room to grow, the actual proposition no
                    matter it's robustness is static, meaning that it depends solely on establish constraints. In other
                    word, this solution won't be sustainable to the company change. In a constantly evolving business
                    landscape an optimal or near-opetimal solution should be adaptable to change so that at any point time
                    it's stay in tune with the company vision wihtout requiring too much human interaction.
                    At this end we propose to continue improving this solution, this time by focusing on a robust and
                    adaptable solution definition and not to a business process implementation. To reach this goal we will
                    focus our effort into transalating the actual problem in the filed of computer sience research problem.
                </p>
            </span>
        </div>
    </div>
@endsection


{{-- ==================== Useful old comment ===================== --}}
{{-- <small style="position: absolute;font-size:14px; color:grey;right:5px; bottom:-3px;"><i class="bi bi-person-bounding-box highlight-pr-color"></i> Reviewed by  <strong>No Reviewer</strong></small> --}}
{{-- Where there is content --}}
{{-- @for ($i = 0; $i < 2; $i++)
<div class="card" style="margin-bottom:12px;">
    <img src="https://fakeimg.pl/600x200" class="card-img-top" alt="content image">
    <div class="card-body">
        <h5 class="card-title" style="font-size:14px;color:#0047AB;">Card title</h5>
        <p class="card-text" style="margin-bottom:10px;font-size:13px;">Some quick example
            text to build on the card title.</p>
        <a href="#" class="btn btn-primary"
            style="padding:8px 15px;font-size:12px;">Read more <i
                class="bi bi-caret-right-fill"></i></a>
    </div>
</div>
@endfor --}}


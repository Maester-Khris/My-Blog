@extends('blog/article_layout', ['title' => 'Introducing optimization in performance evaluation'])

@section('content')
<div class="card d-flex flex-column justify-content-center" style="height:400px;">
    <img src="/images/optimization.png" class="card-img-top" alt="article illustration">
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
            <h3>1. Optimization Problem</h3>
            <h4>1.1 Numerical Optimization Problem</h4>
            <p class="inner-partial">
                The resolution of real-life problems often involves finding the best way to accomplish a task, reach a goal, or obtain a desired result. Given a task/goal/result x, we need to develop a method that guarantees the best possible outcome. This involves:
            </p>
            <ul>
                <li>Identifying Alternatives: We must first identify different ways to achieve the desired result.</li>
                <li> Eliminating Alternatives: Next, we eliminate options that do not lead to the best outcome. This requires: Clearly defining initial conditions then evaluating each solution against these conditions and finally declaring the solution that meets the most conditions as the "best."</li>
            </ul>
            <p> The process described above is known as an optimization problem. Formally, an optimization problem is defined as the task of finding the best solution from a set of feasible solutions that satisfy all constraints defined by the problem.</p>

            <h4>1.2 Mathematical Representation of a numerical optimization</h4>
            <ul>
                <li>
                    Optimize$ x = z(x)$
                </li>
                <li>
                    Minimize or maximize $Z(x)$, subject to constraints $c_1: h(x)>a; c_2: g(x)<=b; ...; c_n$
                </li>
            </ul>
            <p>
                Here, $Z$ is our optimization function, often referred to as a fitness function in software engineering. Solving the optimization problem involves finding the function $Z$ that minimizes or maximizes the value of $z(x)$ while meeting the constraints $c_1$ to $c_n$.
            </p>

            <h4>1.2.  Multi Objective Optimization Problem</h3>
            <p class="inner-partial">
                From a pure mathematical point of view, there are multiple forms with different definitions of an optimization problem, depending on the type of decision variable, objective function, and constraints. For now, let's focus on the constraint factor.
                In optimization, we typically find an objective function that optimizes (minimizes or maximizes) a specific identified objective. However, what if the problem involves finding the best alternative based on multiple criteria (objectives) that influence each other
            </p>
            <em>Example Scenario:</em>
            <p class="inner-partial">
                Let's Consider the scenario of buying a car where we have two main criteria: comfort and cost. Logically, we will look for the car that minimizes cost while maximizing comfort. However, this is not always possible. In optimization we just described what is known as conflicting objectives. \\
                Some resources present multi-objective optimization (MOP) or Pareto optimization as an optimization problem that involves more than one objective function to be optimized simultaneously. In this scenario, the optimal solution is the one that presents the best trade-offs between conflicting objectives.
            </p>

            <em>Formal definition of MOP:</em>
            <p>
                Minimize or Maximize a set of objectives subject to a set of constraints $ \left\{ c_1,c_2,c_3,c_n \right\}$   <br>
                Optimize $\overline{Z} = (Z_1,Z_2,Z_3,...,Z_k)$ <br>
                subject to a set of constrains $ \left\{ c_1, c_2,..., c_m \right\} / c_j = f(X_i) X_i$ a decision variable.
            </p>

            <h4>1.3 Team performance assessment, updated problem formulation</h4>
            <p class="inner-partial">
                After these definitions, we can rethink our team performance evaluation based on the following points:
            </p>
            <ul>
                <li><strong>Optimization as Decision-Making</strong>: Optimization problems are purely decision-making problems; therefore, we are facing an optimization problem.</li>
                <li><strong>Objective Functions</strong>: Optimization problems seek objective functions that look for optimal (min or max) solutions among a set of solutions. The formulas for efficiency and quality can both be stated as objective functions.</li>
                <li><strong>Multi-Objective Optimization</strong> : When facing an optimization problem where one solution does not automatically optimize all objectives, we conclude that it is a multi-objective optimization problem. A new optimal solution is found by identifying a solution that presents the best trade-off in how it optimizes each objective.</li>
            </ul>
            <p class="inner-partial">
                Hence, lets present the updated mathematical definition of our problem: <br>
                <span class="d-block spec-formula">
                    Optimize $ T_{i_{efficiency}} = (T_{i_{perf}}, T_{i_{qual}})$
                </span>
                subject to the following constraints:
            </p>
            <ul>
                <li>Let $p_k \epsilon P$:</li>
                <li>$f(p_k): (p_{k_{ec}} - p_{k_{rc}}) >=0 $ (the project's real-time completion does not exceed the estimated completion time)</li>
                <li>$h(p_k): 1 - (p_{k_{quality}} / p_{k_{complexity}}) >=0$. (the expected quality of a project is proportional to its complexity; the lower the complexity, the better the quality should be.</li>
            </ul>
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